function run(myVue){
    if ( $('#include-pitchesTabs-js').length !== 0 ) {

        $('#myTabs a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
        });
    }
}

module.exports = run;