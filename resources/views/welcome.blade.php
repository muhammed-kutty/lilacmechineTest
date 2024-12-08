
@extends('main.main')

@section('content')
    

    <div  style="height: 100vh; width: 100% ; background-color: #ddd7d7;">
        <div class="container " style="padding: 80px">
            <div class="row">
                <div class="col-12">
                    <div class="text-dark fw-bolder">
                        <h2>search</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <input class="w-100 rounded" id="search_input"
                            style="background-color: rgb(242, 239, 239); height:45px; padding-left: 20px; font-weight: 600; border: 
                            none"
                            placeholder="Search  name/designation/department" type="text">
                    </div>
                </div>
            </div>

            <div class="row">
                <div id="search_result" class="  d-flex flex-wrap justify-content-between" style="width: 100%">
                    
                    
                </div>

            </div>
        </div>
    </div>






    @endsection








