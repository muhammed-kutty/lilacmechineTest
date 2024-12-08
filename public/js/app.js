$(document).ready(function() {
    $("#search_input").on('keyup', function() {
        const query = $(this).val();
        console.log(query);

        if(query.trim() === ''){
            $('#search_result').html('')
            return
        }

        $.ajax({
            type: "post",
            url: "/search",
            data: {query:query},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                console.log("success",response.data)               
                let searchResulthtml = ''

                response.data.forEach(element => {
                    searchResulthtml +=
                    `<div class="col-lg-5 col-12" style="">
                    <div class="pt-4 ">
                        <div class="card rounded">
                            <div class="card-body">
                                <h5 class="card-title"> <strong>${element.name}  </strong></h5>
                                <p> Department :- <strong>${element.department.name} </strong></p>
                                <p> Designation <strong>${element.designation.name} </strong></p>
                                <p> Phonenmber <strong>${element.phoneNmber} </strong></p>
                            </div>
                        </div>
                    </div>
                </div>`;
               }); 

                 $("#search_result").html(searchResulthtml)   
                 localStorage.setItem('searchResults', JSON.stringify(response.data));
            },

            error: function (xhr, status, error) {
                console.log("Error: " + status + " " + error);
            }
        });
    });


    const searchedresult =  localStorage.getItem('searchResults');
    if(searchedresult){
        console.log("raedy")
        const result  = JSON.parse(searchedresult);
        let searchResulthtml = ''
        result.forEach(element => {
            searchResulthtml +=
            `<div class="col-lg-5 col-12" style="">
            <div class="pt-4 ">
                <div class="card rounded">
                    <div class="card-body">
                        <h5 class="card-title"> <strong>${element.name}  </strong></h5>
                        <p> Department :- <strong>${element.department.name} </strong></p>
                        <p> Designation <strong>${element.designation.name} </strong></p>
                        <p> Phonenmber <strong>${element.phoneNmber} </strong></p>
                    </div>
                </div>
            </div>
        </div>`;
       }); 

         $("#search_result").html(searchResulthtml)   

    }
});







