<?php include 'inc/header.php' ?>
<?php include 'inc/contact.php' ?>
<div id="contact-comp">
    <section id="contact-section1">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">  
                    <div class="text-center">   
                    <h1><b>contact me</b></h1>
                    <h4><br>If you have any questions, concerns, or just would like to say hello, please 
                        fill out this form, click the submit button, and I will get back to you as 
                        soon as possible.  
                    </h4>
                    </div>
                        <?php if($msg != ''): ?> 
                        <div class="alert <?php echo $msgClass; ?>">
                        <?php echo $msg; ?></div>

                        <?php endif; ?>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; # Submitting to this file ?>">
                        <div class="messages"></div>
                        <div class="controls">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>First Name *</label>
                                <input type="text" name="firstname" class="form-control" 
                                value="<?php echo isset($_POST['firstname']) ? $firstname : ''; ?>"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last Name *</label>
                                <input type="text" name="lastname" class="form-control" 
                                value="<?php echo isset($_POST['lastname']) ? $lastname : ''; ?>"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" class="form-control" 
                                    value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>"> 
                                </div>
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="text" name="email" class="form-control" 
                                    value="<?php echo isset($_POST['email']) ? $email : ''; ?>"> 
                                </div>
                                <div class="form-group">
                                    <label for="form_message">Your Message</label>
                                    <textarea class="form-control" name="message" rows="5" id="message" placeholder="Your message here..."><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                             <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
                              <p class="text-muted"><strong>*</strong> These fields are required.</p>
                            </div>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </section>
<?php include 'inc/footer.php' ?>