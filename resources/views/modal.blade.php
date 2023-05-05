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
                    <td class="countrydetail" id="${i}">${i}</td>
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

<script>


</script>
<script>
    function JSFunc(){
    $('#PreviewModal').modal('show');
  }
</script>
