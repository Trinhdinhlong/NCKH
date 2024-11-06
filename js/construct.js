const URL =
  "https://gateway.chotot.com/v1/public/ad-listing?limit=1000&protection_entitlement=true&cg=13010&st=s,k&key_param_included=true";

const getData = async () => {
  fetch(URL)
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      localStorage.setItem("job-sao-do", JSON.stringify(data));
    })
    .catch((error) => {
      //   handle the error
      console.log(error);
    });
};

window.addEventListener("load", () => {
  console.log("page is fully loaded");
  getData();
});
