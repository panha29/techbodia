
<script>
const loadCountryAPI = () =>{
    fetch('https://restcountries.com/v3.1/all')
    .then(res => res.json())
    .then(data => displayCountries(data));

}
    const tbb = document.querySelector("table tbody");
    var i=0;
    const displayCountries = countries =>{
    const countriesHTML = countries.map(country => getCountry(country,++i));
    const container = document.getElementById('countries');
    container.innerHTML = countriesHTML.join(' ');

    // console.log(countries);
}

const getCountry = (country) =>{
    // console.log(country.name.nativeName);
    return `
    <tr>
        <td class="countrydetail" id="${i}">${i}</td>
        <td class="col-2"><button onclick="JSFunc()" value="${country.name.official}">${country.name.official}</button></td>
        <td class="col-1"><img src="${country.flags.png}" style="width:75px" draggable="false"></td>
        <td class="col-1">${country.cca2}</td>
        <td class="col-1">${country.cca3}</td>
        <td class="col-1">${country.name.nativeName}</td>
        <td>${country.altSpellings}</td>
        <td>${country.idd.root}</td>
    </tr>
    `
}




const countryModal = (country)=>{
    return`
    <div class="modal fade bd-example-modal-lg" tabindex="-1" id="PreviewModal"role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="PreviewTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="PreviewBody">
                    <tr>
                        <td class="countrydetail" id=""></td>
                        <td class="col-2"><button onclick="JSFunc()">${country.name.official}</button></td>
                        <td class="col-1"><img src="${country.flags.png}" style="width:75px" draggable="false"></td>
                        <td class="col-1">${country.cca2}</td>
                        <td class="col-1">${country.cca3}</td>
                        <td class="col-1">${country.name.nativeName}</td>
                        <td>${country.altSpellings}</td>
                        <td>${country.idd.root}</td>
                    </tr>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>
`
}


loadCountryAPI();
</script>

<script>
function testAjax(handleData) {
  $.ajax({
    url:"https://restcountries.com/v3.1/all",
    success:function(data) {
      handleData(data);
      console.log(data);
    }
  });
  testAjax(function(output){
  // here you use the output
});
}
</script>
<script>
    function JSFunc(){
    $('#PreviewModal').modal('show');
  }
</script>

