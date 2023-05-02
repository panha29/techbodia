<script>
// this is an arrow function
const loadCountryAPI = () =>{
    // fetch url of rest country from website
    fetch('https://restcountries.com/v3.1/all')
    .then(res => res.json())
    .then(data => displayCountries(data))
}

// displaying all countries
const displayCountries = countries =>{

    const countriesHTML = countries.map(country => getCountry(country));
    const container = document.getElementById('countries');
    container.innerHTML = countriesHTML.join(' ');
    // console.log(countries);


}

// get data and set it to html
const getCountry = (country) =>{
    console.log(country.name.nativeName.khm);

    return `
    <tr id="">
     <td>${country.name.official}</td>
     <td><img src="${country.flags.png}" style="width:75px"></td>
     <td>${country.cca2}</td>
     <td>${country.cca3}</td>
     <td>${country.name.nativeName}</td>
     <td>${country.altSpellings}</td>
     <td>${country.idd.root}</td>
 </tr>
    `

}
// call the funtion to get output in console
loadCountryAPI()
</script>


