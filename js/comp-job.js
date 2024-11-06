const jobListComponent = document.querySelector(".job-list");
const loadJobComponent = document.querySelector(".load-job");
const formatter = new Intl.NumberFormat("en-US", {});

const url = new URL(window.location.href);
var id = url.searchParams.get("id");
// console.log(id);
const jobListData = JSON.parse(localStorage.getItem("job-sao-do"));

if (id && jobListData) {
  let html = "";
  const jobData = jobListData?.ads?.find((job) => job.ad_id == id);
  console.log(jobData);
  html += `
<div class="row gy-5 gx-4">
<div class="col-lg-8">
    <div class="d-flex align-items-center mb-5">
        <img class="flex-shrink-0 img-fluid border rounded" src=${
          jobData?.avatar
        }
            style="width: 80px; height: 80px;">
        <div class="text-start ps-4">
            <h3 class="mb-3">${jobData?.subject}</h3>
            <span class="text-truncate me-3"><i
                    class="fa fa-map-marker-alt text-primary me-2"></i>${
                      jobData?.ward_name
                    }, ${jobData?.area_name}, ${jobData?.region_name}</span>
            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                Time</span>
            <span class="text-truncate me-0"><i
                    class="far fa-money-bill-alt text-primary me-2"></i>${formatter.format(
                      jobData?.min_salary
                    )} vnđ - ${formatter.format(jobData?.max_salary)} vnđ</span>
        </div>
    </div>

    <div class="mb-5">
    <img class="width-full" style="width: 100%; margin-bottom: 30px " src=${
      jobData?.image
    } alt="" srcset="" />
        <h4 class="mb-3">Mô tả Công việc</h4>
        <p>${jobData?.body}</p>
       
    </div>
    ${
      jobData?.special_display &&
      jobData?.special_display_images &&
      jobData?.special_display_images?.map((i) => {
        return `  <img class="width-full" style="width: 100%; margin-bottom: 30px " src=${i} alt="" srcset="" />`;
      })
    }
  
    <div class="">
        <h4 class="mb-4">Ứng tuyển công việc của chúng tôi</h4>
        <form>
            <div class="row g-3">
          
                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="col-lg-4">
    <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
        <h4 class="mb-4">Tổng quan:</h4>
        <p><i class="fa fa-angle-right text-primary me-2"></i>Đăng lúc: ${
          jobData?.date
        }</p>
        <p><i class="fa fa-angle-right text-primary me-2"></i>Chỗ trống: ${
          jobData?.vacancies
        } vị tí</p>
        <p><i class="fa fa-angle-right text-primary me-2"></i>Thời gian làm việc: Full Time</p>
        <p><i class="fa fa-angle-right text-primary me-2"></i>Lương: ${formatter.format(
          jobData?.min_salary
        )} vnđ - ${formatter.format(jobData?.max_salary)} vnđ</p>
        <p><i class="fa fa-angle-right text-primary me-2"></i>Địa điểm: ${
          jobData?.ward_name
        }, ${jobData?.area_name}, ${jobData?.region_name}</p>
        <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Lợi ích: ${
          jobData?.benefits
        }</p>
    </div>
    <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
        <h4 class="mb-4">Chi tiết công ty:</h4>
      <div style="text-align: center" >
        <img src="${
          jobData?.company_logo
        }" alt="" style="width: 150px" srcset="" />
        <p style="font-weight: bold"> ${jobData?.company_name}</p>
      </div>
      <div>
      <iframe 
  width="100%" 
  height="480" 
  frameborder="0" 
  scrolling="no" 
  marginheight="0" 
  marginwidth="0" 
  src="https://maps.google.com/maps?q=${jobData?.latitude},${
    jobData?.longitude
  }&hl=es&z=12&amp;output=embed"
 >
 </iframe>
      </div>
       
    </div>
</div>
</div>
`;
  loadJobComponent.innerHTML = html;
}
