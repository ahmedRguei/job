//used to hide the flash Message after insert or update the ibformations of candidate
setTimeout(function() {
    $('.typo3-messages').fadeOut(3000);
});
//function to pull a notification
function notification(type, title, message){
    $.notify({
        icon: 'https://randomuser.me/api/portraits/med/men/77.jpg',
        title: title,
        message: message
    },{
        type: type,
        delay: 2000,
        icon_type: 'image',
        template: '<div data-notify="container" class="col-xs-10 col-sm-2 alert alert-{0}" role="alert">' +
        '<span data-notify="title" class="text-center"><i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Loading...</span> {1}</span>' +
        '<span data-notify="message" class="text-center">{2}</span>' +
        '</div>'
    });
}
//function input multi tags - used for select skills and add ones
function initTags(label, tags, auto, element){
    var tags = $('#'+element).inputTags({
        tags: tags,
        autocomplete: {
            values: auto
        },
        init: function(elem) {
            $('span', '#events').text('init');
            $('<p class="results'+element+'">').html('<strong>'+label+':</strong> ' + elem.tags.join(' - ')).insertAfter(elem.$list);
        },
        create: function() {
            $('span', '#events').text('create');
        },
        update: function() {
            $('span', '#events').text('update');
        },
        destroy: function() {
            $('span', '#events').text('destroy');
        },
        selected: function() {
            $('span', '#events').text('selected');
        },
        unselected: function() {
            $('span', '#events').text('unselected');
        },
        change: function(elem) {
            $('.results'+element).empty().html('<strong>'+label+':</strong> ' + elem.tags.join(' - '));
        }
    });

    $('#'+element).inputTags('tags', '', function(tags) {
        $('.results'+element).empty().html('<strong>'+label+':</strong> ' + tags.join(' - '));
    });

    var autocomplete = $('#'+element).inputTags('options', 'autocomplete');
    $('span', '#autocomplete').text(autocomplete.values.join(', '));
}
//function show field to edit interview details
function ediIterviewDetails()
{
    $('#interviwdetails').hide();
    $('#editinterviwdetails').show();
}

//function hide field to edit interview details
function disableIterviewDetails()
{
    $('#interviwdetails').show();
    $('#editinterviwdetails').hide();
}

//function show field to edit Candidat Experiences
function editCandidatExperiences(id)
{
    if ( $('#candidatexperiences'+id).hasClass( "hidden" ) ) {
        $('#candidatexperiences'+id).removeClass("hidden");
        $('#editcandidatexperiences'+id).addClass("hidden");
    }else{
        $('#candidatexperiences'+id).addClass("hidden");
        $('#editcandidatexperiences'+id).removeClass("hidden");
    }
}
//function show field to edit Candidat Experiences
function editCandidatEducations(id)
{
    if ( $('#candidateducations'+id).hasClass( "hidden" ) ) {
        $('#candidateducations'+id).removeClass("hidden");
        $('#editcandidateducations'+id).addClass("hidden");
    }else{
        $('#candidateducations'+id).addClass("hidden");
        $('#editcandidateducations'+id).removeClass("hidden");
    }
}
//function show field to edit Candidat Experiences
function ediInfosCandidat()
{
    if ( $('#infoscandidats').hasClass( "hidden" ) ) {
        $('#infoscandidats').removeClass("hidden");
        $('#social-resume').removeClass("hidden");
        $('#editinfoscandidats').addClass("hidden");
    }else{
        $('#infoscandidats').addClass("hidden");
        $('#social-resume').addClass("hidden");
        $('#editinfoscandidats').removeClass("hidden");
    }
}
function disableCandidatExperiences(id)
{
    $('#candidatexperiences').show();
    $('#editcandidatexperiences').hide();
}
//function show the whole resume
function showResume(){
    if ( $( '#pdfresumme' ).hasClass( "height-500" ) ) {
        $('#pdfresumme').removeClass('height-500');
        $('#showResumeFa').removeClass('fa-eye-slash');
        $('#showResumeFa').addClass('fa-eye');
    }else{
        $('#pdfresumme').addClass('height-500');
        $('#showResumeFa').removeClass('fa-eye');
        $('#showResumeFa').addClass('fa-eye-slash');
    }
}
//function show form to edit pdf resume
function showResumeForm()
{
    if ( $( '#formPdfResume' ).hasClass( "hidden" ) ) {
        $('#formPdfResume').removeClass("hidden");
    }else{
        $('#formPdfResume').addClass("hidden");
    }
}
//addCandidatEducations
function addCandidatEducations()
{
    if ( $( '#addeducation' ).hasClass( "hidden" ) ) {
        $('#addeducation').removeClass("hidden");
    }else{
        $('#addeducation').addClass("hidden");
    }
}
//addCandidatExperiences
function addCandidatExperiences(){
    if ( $( '#addexperience' ).hasClass( "hidden" ) ) {
        $('#addexperience').removeClass("hidden");
    }else{
        $('#addexperience').addClass("hidden");
    }
}
jQuery(document).ready(function($) {
    $('.date-picker').datepicker();
    //spoken languages save ajax
    var tagslang = [];
    if($('#spokenLanguage').length){
        initTags('Spoken Languages', tagslang, autolang, 'spokenLanguage');
    }
    $('#updateSpokenLanguage').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            return false;
        }
    });
    //acquired Skills save ajax
    if($('#acquiredSkills').length){
        initTags('Acquired Skills', tagslang, autoskills, 'acquiredSkills');
    }
    $('#updateAcquiredSkills').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            return false;
        }
    });
    //allowerd extension for upload file
    $('input[type=file]').change(function(){
        var ext = this.value.match(/\.(.+)$/)[1];
        switch(ext)
        {
            case 'jpg':
            case 'doc':
            case 'docx':
            case 'pdf':
            case 'png':
                break;
            default:
                notification('danger', 'Upload error', '<br/> This format is not supported, please try again to upload.')
                this.value='';
        }
    });
});


