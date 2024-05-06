<?php include 'layout/header.php'; ?>



<div class="main-container container-fluid">


  <div class="row">
    <div class="col-md-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Contact us</h4>
        </div>
        <div class="card-body">
          <form method="post" action="<?= base_url() ?>admin/Email/send" id="form1">
            <div class="">
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" autocomplete="username">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" autocomplete="username">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" autocomplete="username">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Message</label>
                <!-- <label for="floatingTextarea2">Message</label> -->
                <textarea class="form-control" id="message" name="message" placeholder="" style="height: 100px"></textarea>
              </div>

            </div>
            <button class="btn btn-primary mt-4 mb-0" type="submit">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </div>



</div>

</div>
</div>

<?php include 'layout/footer.php'; ?>
<style>
  .error {
    color: red;
  }
</style>
<script>
  $(document).ready(function() {

    $("#form1").validate({
      rules: {
        name: "required",
        email: {
          required: true,
        },
        subject: "required",
        message: "required",

      },
      messages: {
        name: "Please enter name",
        email: {
          required: "Please enter email",
        },
        subject: "Please enter subject",
        message: "Please enter message",
      },
      errorPlacement: function(error, element) {
        if (element.is(":radio")) {
          error.appendTo(element.parents('.form-group'));
        } else { // This is the default behavior 
          error.insertAfter(element);
        }
      },
      submitHandler: function(form) {
        form.submit();
      }

    });


  })

  $('input').keypress(function(e) {
    if (this.value.length === 0 && e.which === 32) e.preventDefault();
  });
</script>