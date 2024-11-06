const jobListComponent = document.querySelector(".job-list");
const tabLoadJobListComponent = document.querySelector(".tab-load-job-list");

const btnSubmit = document.querySelector("#submit");
const query = document.getElementById("query");
let q = "";
const url = `https://gateway.chotot.com/v1/public/ad-listing?cg=13010&q=${query.value}&st=s,k&limit=20&sp=4&key_param_included=true`;
// console.log(jobListComponent);
const formatter = new Intl.NumberFormat("en-US", {});

query.change = () => {
  q = query.value;
  console.log(q);
};

btnSubmit.onclick = () => {
  console.log();
  fetch(
    `https://gateway.chotot.com/v1/public/ad-listing?cg=13010&q=${query.value}&st=s,k&limit=20&sp=4&key_param_included=true`
  )
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      localStorage.setItem("job-sao-do", JSON.stringify(data));
    })
    .then(() => {
      getAndSetData();
    })
    .catch((error) => {
      //   handle the error
      console.log(error);
    });
}; // getData();

window.addEventListener("load", () => {
  console.log("job-list");

  getAndSetData();
});

const getAndSetData = () => {
  const jobListData = JSON.parse(localStorage.getItem("job-sao-do"));
  console.log(jobListData);
  let html = "";
  jobListData?.ads?.map((ad) => {
    html += `
    <div class="job-item p-4 mb-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-8 d-flex align-items-center">
            <img class="flex-shrink-0 img-fluid border rounded" src="${
              ad?.image
            }" alt="" style="width: 80px; height: 80px;">
            <div class="text-start ps-4">
                <h5 class="mb-3">${ad?.subject}</h5>
                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>${
                  ad?.area_name
                }, ${ad?.region_name}</span>
                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                    Time</span>
                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>${formatter.format(
                  ad?.min_salary
                )} vnđ - ${formatter.format(ad?.max_salary)} vnđ</span>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
            <div class="d-flex mb-3">
                <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                <a class="btn btn-primary" href="?page=job&id=${
                  ad?.ad_id
                }">Ứng tuyển ngay!</a>
            </div>
            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Đăng: ${
              ad?.date
            }</small>
        </div>
    </div>
</div>
    `;
  });
  // console.log("====================================");
  // console.log(html);
  // console.log("====================================");
  tabLoadJobListComponent.innerHTML = html;
};
