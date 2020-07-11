$(document).ready(function () {
    $('.password').hide()
    $('.file').hide()

    $('input[type = "radio"]').click(function () {
        let data = $(this).attr('value')
        switch (data) {
            case 'yesPass':
                $('.password').show()
                break
            case 'yesFile':
                $('.file').show()
                break
            case 'noPass':
                $('.password').hide()
                break
            case 'noFile':
                $('.file').hide()
                break
        }
    })

})