<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/firmarTerminos.css">
    <link rel="stylesheet" href="/css/modalWarning.css">

    <title>BPB Training</title> 
        <link rel="shortcut icon" href="img/logo2.jpeg" />  
</head>
<body style="background-color: rgb(231, 231, 231);position: relative">
    @extends('plantilla')
    
    @section('seccionHeader')

    
    <div class="modalDespuesDeFirmar" id="modalDespuesDeFirmar">
        <div class="tituloInfoDespuesDeFirmar">
            Awesome!
        </div>
        <div class="d-flex justify-content-center infoDespuesDeFirmar">
            <p>
                 Awesome, your account has been successfuly created and we have received your<br>
                acceptance of our terms of service. A copy of the liability weaver will be sent to your <br>
                email so that you have it available at any time. Or visit<br>
                <label class="linkTerminos" onclick="irATerminos()"> https://bpbtraining.com/TermsofService</label> at any time.
            </p>
        </div>
    </div>

    <div class="container-fluid" id="divContrato">
        <div class="d-flex justify-content-center">
            <div class="titulo">
                Liability waiver
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="contendorBlanco">
                <div class="subTitulo">
                    We need one more thing. To finish your order, Please sign the liability waiver for BPB Training.
                </div>
                <div class="d-flex justify-content-center">
                    <div class="informacionterminos">
                        I (the “Client” and/or on behalf of a minor client then minor “Client's Parent” allow the client) voluntarily desire to participate in physical exercise training whether private, semi-private or group classes conducted on behalf of BPB Training, LLC (“BPB”) at the training site of 6970 N. State Road 7, Unit 7, Coconut Creek, FL 33073 (the “facility”) and understand and agree to the following:<br><br>

                        1. Client agrees to assume full responsibility while voluntarily participating in any training classes at the Facility at the Client’s sole risk and discretion. Client shall abide by any rules and regulations for use of the Facility which may be promulgated from time to time by the Facility.<br><br>

                        2. Client understands and agrees that there is a risk of injury associated with participation in any training/exercise program and that there exists the possibility for certain conditions occurring during or following training and/or exercise. These may include, but are not limited too, mild lightheadedness, fainting, abnormalities of blood pressure or heart rate, ineffective heart function in rare instances, heart attack or stroke. The reaction of the cardiovascular system to such activity cannot be predicted without complete accuracy.<br><br>

                        3. It is strongly recommended that the Client receive a medical clearance from his/her private physician prior to starting or participation in any training/exercise program. The Facility training programs are not designed for individuals with known heart disease whether without functional impairment.<br><br>

                        4. Client has been informed that any fitness program includes possible risks and all exercise shall be undertaken at the Client’s sole risk and discretion. Client assumes full responsibility for any and all Facility, Facility instructors, officers, directors, employees or agents of either and/or any successor assigns or and all claims, demands, injuries, damages, actions, or causes of action, whatsoever to my person or property arising out of or connected to the services, facilities, training classes (private/semi-private/group), or the facility where same is located (including Facility as applicable). Client hereby agrees to indemnify defend, hold harmless, release and discharge the Facility from all claims, demands, injuries, damage actions causes of action and from all acts of active or passive negligence on the part of the Facility, the Facility instructors, their servants, agents, employees, and/or any successors and assigns, whatsoever, for any damages, injuries or losses the may be sustained by the Client arising from or in connection with the activities that Client voluntarily participated, including without limitation, attorney’s fees, costs, and expenses of any litigation, arbitration or other proceeding.<br><br>

                        8 Hour Cancellation Policy:<br><br>

                        BPB Training enforces a strict 8 hour cancellation policy. If you have reserved your place in BPB Class (Private/Semi-Private/Group) and fail to cancel 8 hours in advance you will be charged fo the class.
                        Late Cancel Policy:<br><br>

                        BPB Training enforces a strict Late Cancel Policy. You must arrive 5 minutes prior to your class or you will forfeit your spot and incur the late cancel charge. This ensures your spot in the class.
                        Dress Code Policy:<br><br>

                        BPB Training wants you to come to training fully prepared for strenuous activity: running shoes (cleats not allowed?) , athletic shorts/pants, athletic t-shirt, protective gear, ie cups for males, helmets, gloves, catching gear, towels and water bottle. We reserve the right to refuse you entrance into the training Facility if you are not properly attired.
                        Age Policy:<br><br>

                        Ages 14-15 must be accompanied by a parent or legal guardian in the workout at all times Ages 16-17 are permitted to workout without parental supervision or accompaniment. Age 18 and above are considered adults and fully responsible for themselves.
                        -Need to add to the contract whether above or under separate form release for recordings whether photographic or by video during individual, private, semi-private, and or group training sessions at Facility or its likeness if off property belongs to PBP Training, LLC (also know as the facility). This includes software training systems…list name, in addition to any and all further software systems purchased or for the use of Facility Photography, video imagery used for training, facility advertising whether in print, any and all social media platforms, tv or internet If this is added above, add initials to this portion of the agreement paragraph<br><br>

                        -Not sure if you need to add something disclosing that the facility is under video surveillance<br><br>

                        -there should also be a clause when it comes to access through the front door when it comes to the membership portion of the facility. and what those expectations and agreements should be.<br><br>

                        -late fee if credit card is able to be processed by the due date?<br><br>

                        -Rules and Regulation / Code of Conduct for clients, clients parents and/or their …….guest?<br><br>

                        -Rules and Regulation / Code of Conduct for employees/1099 or representatives of BPB Training, LLC which should be attached to their Paycom File they would complete.<br><br>

                        -Create separate waiver for “teams” and their participants since there will be times that the kid is not part of the membership program.
                    </div>
                </div>
                <div class="informacionAdicional">
                    Disclaimer: By typing your name below, you are signing this applications electronically. You agree that your electronic signature is the legal equivalent of your manual signature on this application.
                </div>
                <div class="divInput">
                    <label class="labelnombre" for="">Name</label><br>
                    <input class="inputNombre" id="inputText" type="text" placeholder="Enter your name">
                </div>
                <div class="divCheck d-flex justify-content-start">
                    <input class="checkbox" type="checkbox" name="" id="check1" value="">
                    <label class="labelCheckbox" id="checkWaiver" for="check1" >I agree with the above Terms.</label>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btnsutmit" id="btnSutmit" onclick="firmarContrato()">Submit</button>
                    <button class="btnRecordar" id="btnRecordar" onclick="btnRecordar()">Later</button>
                </div>
            </div>
        </div>
    </div>

    <div class="divWith" id="modalWarning">
        <header><img class="imgWarning" src="img/warning2.png" width="80px" alt=""></header>
        <div class="textWarningFirma" id="contenInfoFAltante">
            
            
        </div>
    </div>

    <div class="opcidadPantalla" id="opcidadPantalla">
        .
    </div> 

    <script src="/js/usuario/aceptarPermisos.js"></script>
    @endsection
</body>
</html>
