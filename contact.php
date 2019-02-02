<div class="box">
    <div class="lm-c-intro text-center">
        <h2 class="lm-service-h2 lm-pad-top lm-i-content animated fadeInUp" id="lmc-13"><span class="text-dblue">C</span>ONTACT US</h2>
        <p class="lm-service-p p-pad7 lm-i-content animated fadeInUp" id="lmc-14"><span class="lm-attention">Let's create something cool together.</span> Send us a message about your project and budget or related enquiries. We'd be glad to reach out right back in record time.</p>
    </div>
    <div class="row p-4 lm-ad-display">
        <div class="col-md-5 lm-service-left lm-i-content animated fadeInLeft" id="lmc-15">
            <div class="pt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle fa-stack-2x text-dblue"></i>
                                <i class="fa fa-map-marker fa-stack-1x text-white"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-8 pt-2">
                        <h5>ADDRESS</h5>
                        <p>26 Afolabi Obe Street,<br>Ejigbo, Lagos</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="p-2">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle fa-stack-2x text-dblue"></i>
                                <i class="fa fa-address-book fa-stack-1x text-white"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-8 pt-2">
                        <h5>CONTACT METHODS</h5>
                        <p>
                            <a href="mailto:hello@legomake.com" target="blank" class="text-dblue">hello@legomake.com</a><br>
                            <a href="tel:08141189211" class="text-dblue">0814 118 9211</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 lm-service-right">
            <div class="card card-body py-3 lm-i-content animated fadeInRight" id="lmc-16">
                <div id="report-house" class="alert alert-danger" style="display:none;padding: 2em;">
                    <span id="report"></span>
                    <button type="button" class="close" aria-label="Close" id="close-rpt" onclick="close_report_house()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>       
                <form action="javascript:sendMessage()">
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon bg-primary text-white lm-fa">
                                <i class="fa fa-user"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Name" id="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon bg-primary text-white lm-fa">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="email" class="form-control" placeholder="Email" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon bg-primary text-white lm-fa">
                                <i class="fa fa-tablet"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Subject" id="subject">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon bg-primary text-white">
                                <i class="fa fa-pencil"></i>
                            </span>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send message" class="btn btn-primary btn-block btn-lg" id="send">
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function close_report_house() {
    $("#report").text("");
    $("#report-house").fadeOut();
}

function sendMessage()
{
    $("#send").val("Sending...")
    let name = $("#name").val().trim()
    let email = $("#email").val().trim()
    let subject = $("#subject").val().trim()
    let message = $("#message").val().trim()
    let report = $("#report")
    let greetingArr = ["Hello", "Hi", "Bawo ni", "Ndewo", "Kedu", "Ciao"]
    // index to randomly fetch greeting from greetingArr for error message.
    // Array size = 6. Index range (0-5). Floor random by 6
    let index = Math.floor(Math.random() * greetingArr.length)
    let greeting = greetingArr[index]

    if (name == "" || email == "" || subject == "" || message == "") {
        report.text(greeting + ", please fill all the fields.")
    } else if (name.length < 3) {
        report.text(greeting + ", your name should be more than 2 characters")
    } else {
        $.post(
            "sendMessage.php",
            {
                name: name,
                email: email,
                subject: subject,
                message: message
            },
            function (data) {
                if (data == "success") {
                    report.text(greeting + ", your message has been sent. Thank you!")
                    $("#report-house").removeClass("alert-danger").addClass("alert-success")
                } else if (data == "empty") {
                    report.text(greeting + ", please fill all the fields.")
                } else if (data == "name") {
                    report.text(greeting + ", your name should be more than 2 characters")
                } else if (data == "email") {
                    report.text(greeting +", please enter a valid email")
                } else {
                    // alert("We're so sorry for this, for some reason, we couldn't send your message. Send an email to <a href='mailto:hello@legomake.com' target='blank'>hello@legomake.com</a>. Thank you.")
                    report.html("We're so sorry for this, for some reason, we couldn't send your message. Send an email to <a href='mailto:hello@legomake.com' target='blank'>hello@legomake.com</a>. Thank you.")
                }
            }
        )
    }
    $("#report-house").fadeIn();
    $("#report-house").removeClass("alert-success").addClass("alert-danger")
    $("#send").val("Send message")
}
</script>

    