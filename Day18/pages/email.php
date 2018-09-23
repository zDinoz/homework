<div class="inner-block">
    <div class="inbox">
        <h2>Inbox Details</h2>
        <div class="col-md-4 compose">
            <div class="mail-profile">
                <div class="mail-pic">
                    <a href="#"><img src="images/b3.png" alt=""></a>
                </div>
                <div class="mailer-name">
                    <h5><a href="#">Malorum</a></h5>
                    <h6><a href="mailto:info@example.com">malorum@gmail.com</a></h6>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="compose-bottom">
                <ul>
                    <li><a class="hilate" href="#"><i class="fa fa-inbox"> </i>Inbox</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"> </i>Sent Mail</a></li>
                    <li><a href="#"><i class="fa fa-star-o"> </i>Important</a></li>
                    <li><a href="#"><i class="fa fa-pencil-square-o"> </i>Drafts</a></li>
                    <li><a href="#"><i class="fa fa-trash-o"> </i>Trash</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8 compose-right">
            <div class="inbox-details-default">
                <div class="inbox-details-heading">
                    Compose New Message
                </div>
                <div class="inbox-details-body">
                    <div class="alert alert-info">
                        Please fill details to send a new message
                    </div>
                    <form class="com-mail">
                        <input type="text"  value="To :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'To';}">
                        <input type="text"  value="Subject :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">

                        <textarea rows="6"  value="Message :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message </textarea>
                        <div class="form-group">
                            <div class="btn btn-default btn-file">
                                <i class="fa fa-paperclip"> </i> Attachment
                                <input type="file" name="attachment">
                            </div>
                        </div>
                        <input type="submit" value="Send Message">
                    </form>
                </div>
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>