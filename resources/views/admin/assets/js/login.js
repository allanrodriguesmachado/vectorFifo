// $(function () {
    $(() => {
        const csrfToken = $('meta[name="csrf-token"]').attr('content');
        let ajaxResponseBaseTime = 3;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            },
        });

        const handleLoginSubmit = (event) => {
            event.preventDefault();

            const form = $(event.currentTarget);
            const action = form.attr('action');
            const email = form.find('input[name="email"]').val();
            const password = form.find('input[name="password"]').val();

            $.post(action, {email, password}, (response) => {
                if (response.message) {
                    displayAjaxMessage(response.message);
                }
            }, 'json');
        };

        const displayAjaxMessage = (message, time = ajaxResponseBaseTime) => {
            const $message = $(message);

            $message.append('<div class="message_time"></div>');
            $message.find('.message_time').animate({width: '100%'}, time * 1000, function () {
                $(this).parents('.message').fadeOut(200);
            });

            $('.ajax_response').append($message);
        };

        $('.ajax_response .message').each((index, element) => {
            displayAjaxMessage(element, (ajaxResponseBaseTime += 1));
        });

        $('.ajax_response').on('click', '.message', (event) => {
            $(event.currentTarget).effect('bounce').fadeOut(1);
        });

        $('form[name="login"]').on('submit', handleLoginSubmit);
    });

// });
