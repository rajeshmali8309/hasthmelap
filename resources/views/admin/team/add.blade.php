@include('admin.layout.header')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Add Team Member</h3>
        </div>
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show text-center reg_success" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8 col-sm-10">
                <div class="shadow p-4 rounded bg-white">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="Name">Name:</label>
                            <input type="text" class="form-control" value="{{old('name')}}" id="Name" placeholder="Enter name" name="name">
                            <p style="color: red;" id="errorName"></p>
                        </div>

                        <div class="form-group mt-2">
                            <label for="Position">Position:</label>
                            <input type="text" class="form-control" value="{{old('position')}}" id="Position" placeholder="Enter position" name="position">
                            <p style="color: red;" id="errorPosition"></p>
                        </div>

                        <div class="form-group mt-2">
                            <label for="Qualification">Qualification:</label>
                            <input type="text" class="form-control" value="{{old('first_name')}}" id="Qualification" placeholder="Enter qualification" name="qualification">
                            <p style="color: red;" id="errorQualification"></p>
                        </div>

                        <div class="form-group mt-2">
                            <label for="Experience">Experience:</label>
                            <input type="text" class="form-control" value="{{old('first_name')}}" id="Experience" placeholder="Enter experience" name="experience">
                            <p style="color: red;" id="errorExperience"></p>
                        </div>

                        <div class="form-group mt-2">
                            <label for="Linkedin">Linkedin:</label>
                            <input type="text" class="form-control" value="{{old('linkedin')}}" id="Linkedin" placeholder="Enter linkedin profile URL" name="linkedin">
                            <p style="color: red;" id="errorLinkedin"></p>
                        </div>

                        <div class="form-group mt-2">
                            <label for="Twitter">Twitter:</label>
                            <input type="text" class="form-control" value="{{old('twitter')}}" id="Twitter" placeholder="Enter twitter profile URL" name="twitter">
                            <p style="color: red;" id="errorTwitter"></p>
                        </div>

                        <div class="form-group mt-2">
                            <label for="Profile">Profile Picture:</label>
                            <input type="file" class="form-control" accept=".jpg,.jpeg,.png,.gif,image/*" value="{{old('image')}}" id="Profile" name="image">
                            <p style="color: red;" id="Profile-error"></p>
                        </div>
                        <div class="form-group mt-3 d-grid">
                            <button type="submit" class="btn bg-dark text-white">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Add team Validation -->
<script>
    $(document).ready(function(){

        // require field check 
        $("input").blur(function(){
            let inputID = $(this).attr("id");

            // LinkedIn validation
            if (inputID === "Linkedin") {
                let linkedinRegex = /^https?:\/\/(www\.)?linkedin\.com\/.*$/i;
                if (!linkedinRegex.test($(this).val())) {
                    $("#errorLinkedin").text("Please enter a valid LinkedIn profile URL");
                }
            }

            // Twitter validation
            if (inputID === "Twitter") {
                let twitterRegex = /^https?:\/\/(www\.)?(twitter\.com|x\.com)\/[A-Za-z0-9_]{1,15}$/i;
                if (!twitterRegex.test($(this).val())) {
                    $("#errorTwitter").text("Please enter a valid Twitter profile URL");
                }
            }

            // Profile Picture validation
            if($(this).val().trim() === ''){
                $("#error"+inputID).text(inputID +" field is require");
            }
        });

        $(document).on("change", "#Profile", function () {
            let allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            if($(this).val().trim() === ''){
                $("#Profile-error").text("Profile Picture field is required");
            }else{
                if (allowedExtensions.exec($(this).val())) {
                    $("#Profile-error").text("");                
                }else{
                    $("#Profile-error").text("Only JPG, JPEG, PNG, GIF files are allowed");
                }
            }
        });

        // remove error on focus
        $("input").focus(function(){
            let inputID = $(this).attr("id");
            $("#error"+inputID).text("");
        });


        // form submit validation
        $("form").submit(function(e){
            let isValid = true;

            $("input").each(function(){
                let inputID = $(this).attr("id");
                let inputVal = $(this).val().trim();

                if (inputVal === '') {
                    $("#error"+inputID).text(inputID + " field is required");
                    isValid = false;
                }

                // LinkedIn final check
                if (inputID === "Linkedin" && inputVal !== '') {
                    let linkedinRegex = /^https?:\/\/(www\.)?linkedin\.com\/.*$/i;
                    if (!linkedinRegex.test(inputVal)) {
                        $("#errorLinkedin").text("Please enter a valid LinkedIn profile URL");
                        isValid = false;
                    }
                }

                // Twitter final check
                if (inputID === "Twitter" && inputVal !== '') {
                    let twitterRegex = /^https?:\/\/(www\.)?(twitter\.com|x\.com)\/[A-Za-z0-9_]{1,15}$/i;
                    if (!twitterRegex.test(inputVal)) {
                        $("#errorTwitter").text("Please enter a valid Twitter profile URL");
                        isValid = false;
                    }
                }
            });

            let filePath = $("#Profile").val();
            if(filePath === ''){
                $("#Profile-error").text("Profile Picture field is required");
                isValid = false;
            } else {
                let allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                if (!allowedExtensions.exec(filePath)) {
                    $("#Profile-error").text("Only JPG, JPEG, PNG, GIF files are allowed");
                    isValid = false;
                }
            }

            //Stop form submit if invalid
            if(!isValid){
                e.preventDefault();
            }
        });
    });
</script>
@include('admin.layout.footer')