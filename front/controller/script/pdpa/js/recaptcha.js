grecaptcha.ready(function() {
    grecaptcha.execute('6LdwhmAaAAAAAFl9J2G6qLSyBxulvvs_nD4p1Cpd', {action: 'contact'}).then(function(token) {
        $('input[name="g-recaptcha-response"]').val(token);
    });
});
