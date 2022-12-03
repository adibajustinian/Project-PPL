<div class="container  col-md-4 ">
    <div class="form-group py-2">

        <label for="provinsi"> provinsi</label>
        <select class="form-select" id="provinsi">
            <option value=""> Select provinsi</option>
            <?php
          

            ?>
                  


        </select>
    </div>
    <div class="form-group py-2">
        <label for="provinsi"> kabupaten</label>
        <select class="form-select" id="kabupaten">
            <option value="">select kabupaten</option>

        </select>
    </div>
    <div class="form-group py-2 ">
        <label for="provinsi"> City</label>
        <select class="form-select" id="city">
            <option value="">select City</option>
        </select>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $("#provinsi").on('change', function() {
        var provinsiid = $(this).val();

        $.ajax({
            method: "POST",
            url: "response.php",
            data: {
                id: provinsiid
            },
            datatype: "html",
            success: function(data) {
                $("#kabupaten").html(data);
                $("#city").html('<option value="">Select city</option');

            }
        });
    });
    
});
</script>