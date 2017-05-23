//ajax add education
$('#educationsubmit').click(function(){
    if( $('#school').val() != '' &&  $('#degree').val() != '' &&  $('#fieldStudy').val() != '' &&  $('#fromDate').val() != '' &&  $('#toDate').val() != '' )
    {
        var form = $('#newEducation');
        $.post(ajaxURL, form.serialize(), function(response) {
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