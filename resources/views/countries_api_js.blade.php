
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
        <td class="col-2">${country.name.official}</td>
        <td class="col-1"><img src="${country.flags.png}" style="width:75px" draggable="false"></td>
        <td class="col-1">${country.cca2}</td>
        <td class="col-1">${country.cca3}</td>
        <td class="col-1">${country.name.nativeName}</td>
        <td>${country.altSpellings}</td>
        <td>${country.idd.root}</td>
    </tr>
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

