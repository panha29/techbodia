@php
    $html_tag_data = [];
    $title = 'Editable Rows Datatables';
    $description= 'A table enhancing plug-in for the jQuery Javascript library, adding sorting, paging and filtering abilities to plain HTML tables with minimal effort.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Plugins"=>"Plugins","/Interface/Plugins/Datatables"=>"Datatables"]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/datatables.min.css"/>
@endsection

@section('js_vendor')
<script src="/js/vendor/datatables.min.js"></script>
    <script src="/js/vendor/bootstrap-submenu.js"></script>
    <script src="/js/vendor/mousetrap.min.js"></script>
@endsection

@section('js_page')

<script src="/js/cs/datatable.extend.js"></script>
<script src="/js/plugins/datatable.editablerows.js"></script>
@endsection
@include('countries_api')

@section('content')
    <!-- you also can do it as js file but i choose to do its as blade file-->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-title-container">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                            @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                        </div>
                    </div>
                </div>
                <div class="data-table-rows slim">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                            <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                                <input class="form-control" placeholder="Search" id="myInput" onkeyup="filter_name()" autocomplete="off" />
                                <span class="search-magnifier-icon">
                                    <i data-acorn-icon="search"></i>
                                </span>
                                    <span class="search-delete-icon d-none">
                                    <i data-acorn-icon="close"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="data-table-responsive-wrapper">
                        <table id="datatableRows" class="data-table nowrap hover">
                            <thead>
                                <tr>
                                    <th class="text-muted text-small text-uppercase" class="col-2">Name</th>
                                    <th class="text-muted text-small text-uppercase" class="col-2">Flag</th>
                                    <th class="text-muted text-small text-uppercase" class="col-2">CCa2</th>
                                    <th class="text-muted text-small text-uppercase" class="col-2">CCa3</th>
                                    <th class="text-muted text-small text-uppercase" class="col-2">Native Name</th>
                                    <th class="text-muted text-small text-uppercase" class="col-2">Alternative Name</th>
                                    <th class="text-muted text-small text-uppercase" class="col-2">CCC</th>
                                </tr>
                            </thead>
                            <tbody class="countries filter_ctname" id="countries">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function filter_name() {
            var input, filter, table, tr, td, i, tbody;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            tbody = document.getElementById("countries");
            // tbody = document.getElementsByClassName("filter_ctname");
            tr = tbody.getElementsByTagName("tr");
            // tr = tbody.getElementById("filter_countries");
            for (var i = 0; i < tr.length; i++) {
                var tds = tr[i].getElementsByTagName("td");
                var flag = false;
                for(var j = 0; j < tds.length; j++){
                var td = tds[j];
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    flag = true;
                }
                }
                if(flag){
                    tr[i].style.display = "";
                }
                else {
                    tr[i].style.display = "none";
                }
            }
        }
    </script>
@endsection
