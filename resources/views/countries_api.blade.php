
<script>
// this is an arrow function
const loadCountryAPI = () =>{
    // fetch url of rest country from website
    // fetch('https://restcountries.com/v2/all')

    fetch('https://restcountries.com/v3.1/all')
    .then(res => res.json())
    .then(data => displayCountries(data));


}

// displaying all countries
    const tbb = document.querySelector("table tbody");
    var i=0;
    const displayCountries = countries =>{
    // const countriesHTML = countries.map(country => getCountry(country));
    const countriesHTML = countries.map(country => getCountry(country,++i));
    const container = document.getElementById('countries');
    container.innerHTML = countriesHTML.join(' ');
    // console.log(countries);


}

// get data and set it to html
const getCountry = (country) =>{
var id = i;
muid = id;
    // console.log(id);
    // console.log(country.name);

    return `

    <tr>
        <td class="countrydetail" id="${i}">${i}</td>
        <td><a class="detail" data-bs-toggle="modal" data-bs-target="#uid${muid}">${country.name.official}<a/></td>
        <td><img src="${country.flags.png}" style="width:75px" draggable="false"></td>
        <td>${country.cca2}</td>
        <td>${country.cca3}</td>
        <td>${country.name.nativeName}</td>
        <td>${country.altSpellings}</td>
        <td>${country.idd.root}</td>
    </tr>

    `

}

loadCountryAPI();
</script>


{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>

    $(document).ready(function(){

            $(document).on('click','.detail',function(){
            var country_id = $(this).closest('tr').find('.countrydetail').text();
            // alert(country_id);

        });
    });

</script> --}}
