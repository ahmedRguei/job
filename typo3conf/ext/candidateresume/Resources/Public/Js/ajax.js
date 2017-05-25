jQuery(document).ready(function($) {
    //ajax add education
    $('#educationsubmit').click(function(){
        if( $('#school').val() != '' &&  $('#degree').val() != '' &&  $('#fieldStudy').val() != '' &&  $('#fromDate').val() != '' &&  $('#toDate').val() != '' )
        {
            var form = $('#newEducation');
            $.post(ajaxURLAddEducation, form.serialize(), function(response) {
                var items = [];
                var items2 = [];
                $.each(response, function(key, val) {
                    items.push('<li class="list-group-item">' + val.school + ', ' + val.degree + ', ' + val.fieldstudy + ' <span class="text-muted">(' + val.fromdate + ' - ' + val.todate + ')</span>' + '</li>');
                    items2.push('<div class="outer outer-top" id="candidateducations'+ val.uid +'"><strong class="title">' + val.school + ', ' + val.degree + '</strong> <div class="col"><span>' + val.fromdate + ' - ' + val.todate + '</span><p>' + val.fieldstudy + '</p></div>' + '</div>');
                });
                $('#educationslist').html(items.reverse().join(''));
                $('#diveducationslist').html(items2.reverse().join(''));
                $('#school').val('');
                $('#fieldStudy').val('');
                $('#degree').val('');
                $('#fromDate').val('');
                $('#toDate').val('');
                $('#school').removeClass('is-empty-input');
                $('#fieldStudy').removeClass('is-empty-input');
                $('#degree').removeClass('is-empty-input');
                $('#fromDate').removeClass('is-empty-input');
                $('#toDate').removeClass('is-empty-input');
                addCandidatEducations();
                notification('minimalist', 'Saved !','Education added');
            });
            return false;
        }else{
            $('#school').addClass('is-empty-input');
            $('#fieldStudy').addClass('is-empty-input');
            $('#degree').addClass('is-empty-input');
            $('#fromDate').addClass('is-empty-input');
            $('#toDate').addClass('is-empty-input');
            notification('danger', 'Error !','<br>Try to complete all informations');
        }
    });

    //start add experience
    $('#experiencesubmit').click(function(){
        var form = $('#newExperience');
        $.post(ajaxURLAddExp, form.serialize(), function(response) {
            var items = [];
            $.each(response, function(key, val) {
                $('#divexperienceslist').append('<div class="outer outer-top" id="candidatexperiences'+ val.uid +'"> <strong class="title">' + val.title + ' <b> <i class="fa fa-map-marker"></i> ' + val.company + '</b></strong><div class="col"><span>' + val.startdate + ' - ' + val.enddate + '</span><p>' + val.description + '</p></div>' + '</div>');
            });
            addCandidatExperiences();
            notification('minimalist', 'Saved !','Experince Added !');
        });
        return false;
    });//end add experience

    //start change spoken languages
    $('#spokenlangugessubmit').click(function(){
        var form = $('#updateSpokenLanguges');
        $.post(ajaxURLUpdateSpokenLang, form.serialize(), function(response) {
            var items = [];
            $.each(response, function(key, val) {});
            notification('minimalist', 'Saved !','Spoken languages changed');
        });
        return false;
    });//end change spoken languages

    //start change acquiredskills
    $('#acquiredskillssubmit').click(function(){
        var form = $('#updateAcquiredSkills');
        $.post(ajaxURLUpdateAcquiredSkils, form.serialize(), function(response) {
            var items = [];
            $.each(response, function(key, val) {});
            notification('minimalist', 'Saved !','Acquired Skills changed');
        });
        return false;
    });//end change acquiredskills

    //start change info candidadate
    $('#infosubmit').click(function(){
        var form = $('#updateInfo');
        $.post(ajaxURLUpdateInfoCandidat, form.serialize(), function(response) {
            var items = [];
            $.each(response, function(key, val) {
                $("#candidatfirstname").text(val.candidatfirstname);
                $("#candidatlastname").text(val.candidatlastname);
                $("#candidatprofessionaltitle").text(val.candidatprofessionaltitle);
                $("#candidataddress").text(val.candidataddress);
                $("#candidatcity").text(val.candidatcity);
                $("#candidatphone").text(val.candidatphone);
                $("#candidatemail").text(val.candidatemail);
            });
            ediInfosCandidat();
            notification('minimalist', 'Saved !','Candidate basic informations are changed');
        });
        return false;
    });//end change info candidadate

    //start change details interview
    $('#interviewsubmit').click(function(){
        var form = $('#updateInterview');
        $.post(ajaxURLUpdateInterviewDetails, form.serialize(), function(response) {
            var items = [];
            $.each(response, function(key, val) {
                $("#availabilityElement").text(val.availabilityElement);
                $("#interviewNotesElement").text(val.interviewNotesElement);
                $("#realInterviewDateElement").text(val.realInterviewDateElement);
                $("#plannedInterviewDateElement").text(val.plannedInterviewDateElement);
            });
            disableIterviewDetails();
            notification('minimalist', 'Saved !','Interview details changed');
        });
        return false;
    });//end change details interview

    //start add language
    $('#addlanguage').click(function(){
        var form = $('#newLanguageForm');
        $.post(ajaxURLAddlanguage, form.serialize(), function(response) {
            $.each(response, function(key, val) {
                $("#thelanguages").append('<div class="col-sm-6 text-center">'+val.addedLanguage+'</div>');
            });
            $("#titlelanguage").val('');
            notification('minimalist', 'Saved !','Language added');
        });
        return false;
    });//end add language

    //start add language
    $('#addskill').click(function(){
        var form = $('#newLSkillForm');
        $.post(ajaxURLAddskill, form.serialize(), function(response) {
            $.each(response, function(key, val) {
                $("#theskills").append('<div class="col-sm-6 text-center">'+val.addedSkill+'</div>');
            });
            $("#titleskill").val('');
            notification('minimalist', 'Saved !','Skill added');
        });
        return false;
    });//end add language
});