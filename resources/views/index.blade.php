@php
    $html_tag_data = [];
    $title = 'Rest Countries API';
    $description= '';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endsection

@section('js_vendor')

    {{-- <script src="/js/vendor/datatables.min.js"></script> --}}
    <script src="/js/vendor/bootstrap-submenu.js"></script>
    <script src="/js/vendor/mousetrap.min.js"></script>
@endsection

@section('js_page')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="/js/vendor/jquery.dataTables.min.js"></script>
    <script src="/js/vendor/dataTables.bootstrap5.min.js"></script>
    {{-- <script src="/js/cs/datatable.extend.js"></script>
    <script src="/js/plugins/datatable.editablerows.js"></script> --}}
@endsection

@section('content')
@include('countries_api_js')
{{-- @include('modal') --}}
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
                        {{-- <table id="datatableRows" class="data-table nowrap hover"> --}}
                            <table id="countrytable" class="table " style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="col-4">Name</th>
                                    <th class="col-2">Flag</th>
                                    <th class="col-2">CCa2</th>
                                    <th class="col-2">CCa3</th>
                                    <th class="col-2">Native Name</th>
                                    <th class="col-2">Alternative Name</th>
                                    <th class="col-2">CCC</th>
                                </tr>
                            </thead>
                            <tbody class="countries filter_ctname" id="countries">

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
