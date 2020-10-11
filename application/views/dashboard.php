<style>
    .form-control:focus {
        background-color: #f5f5f5 !important;
    }

    .dataTables_filter input {
        background-color: #00000017 !important;
    }

    .tbl-row {
        position: relative;
        animation-name: example;
        animation-duration: 2s;
        /* animation-delay: 2s; */
    }

    @keyframes example {
        0% {
            background-color: #d7d7d7;
            left: 0px;
            top: 0px;
        }

        100% {
            background-color: white;
            left: 0px;
            top: 0px;
        }
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <h4 class="card-title float-left">Movies</h4>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-4">
                        <input type="number" id="srch-prm" class="form-control float-right" placeholder="Enter User id">
                    </div>
                    <div class="col-1">
                        <button class="btn btn-primary float-right mt-1" onclick="getmovies()">Search</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table  table-bordered default-ordering">
                        <thead>
                            <tr>
                                <th>Names of Movies</th>
                            </tr>
                        </thead>
                        <tbody id="tbl-movies">

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Names of Movies</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function getmovies() {
        debugger;
        var id = $("#srch-prm").val();
        if (id == null || id == "") {
            alert("Please Enter Id");
            return;
        }
        $.ajax({
            type: "GET",
            data: {
                id: id
            },
            url: "http://localhost:5000/",
            success: function(res) {
                // alert(res.data);
                $('#tbl-movies').empty();
                var info = JSON.parse(res.data);
                info.forEach(function(item) {
                    var html = "<tr class='tbl-row'><td>" + item + "</td></tr>";
                    // $('#tbl-movies').append(html);
                    $(html).appendTo('#tbl-movies').fadeIn('fast');
                });


            }
        });
    }
</script>