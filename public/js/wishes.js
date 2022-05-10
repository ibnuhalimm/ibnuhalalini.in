const fetchLatestWishes = () => {
    $.ajax({
        type: 'GET',
        url: `${BASE_URL}/api/v1/wishes/latest`,
        success: function(data) {
            const wishes = data.wishes;

            $('#__latestWishesWrapper').html(null);

            if (wishes.length > 0) {
                $.each(wishes, function(index, wish) {
                    $('#__latestWishesWrapper').append(
                        $('<div/>', {
                            class: 'px-12 py-10 rounded-lg bg-white bg-opacity-80',
                        }).append(
                            $('<div/>', {
                                class: 'relative'
                            }).append(
                                $('<div/>', {
                                    class: 'quote-mark-start',
                                    'aria-hidden': 'true',
                                    'html': '&ldquo;'
                                }),
                                $('<div/>', {
                                    class: 'px-2'
                                }).append(
                                    $('<h6/>', {
                                        class: 'text-sm font-bold',
                                        html: `${wish.from}`
                                    }),
                                    $('<p/>', {
                                        class: 'text-sm',
                                        html: `${wish.wish}`
                                    })
                                ),
                                $('<div/>', {
                                    class: 'quote-mark-end',
                                    'aria-hidden': 'true',
                                    'html': '&ldquor;'
                                }),
                            )
                        )
                    )
                });
            }
        }
    });
}

const initFetchWishes = () => {
    setInterval(() => {
        fetchLatestWishes();
    }, 5000);
};

fetchLatestWishes();


$('#__formWish').on('submit', function (event) {
    event.preventDefault();

    const formData = new FormData($(this)[0]);

    $.ajax({
        type: 'POST',
        url: `${BASE_URL}/api/v1/wishes`,
        data: formData,
        processData: false,
        contentType: false,
        beforeSend: function () {
            $('#__btnSubmitWish').attr('disabled', true);
        },
        success: function (response) {
            Swal.fire({
                title: 'Success',
                icon: 'success',
                text: 'Terima kasih atas doanya, :)',
                toast: true,
                position: 'bottom',
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false
            });

            fetchLatestWishes();

            $('#__btnSubmitWish').attr('disabled', false);
            $('#__formWish')[0].reset();
        },
        error: function (error) {
            const response = error.responseJSON;
            let alertMessage = response.message;

            if (error.status === 422) {
                const errorFields = Object.keys(response.errors);

                alertMessage += '<br>';
                $.each(errorFields, function (idx, field) {
                    alertMessage += `- ${response.errors[field][0]} <br>`;
                });
            }

            Swal.fire({
                title: 'Error',
                icon: 'error',
                html: alertMessage,
                toast: true,
                position: 'bottom',
                // timer: 5000,
                // timerProgressBar: true,
                showConfirmButton: true
            });

            $('#__btnSubmitWish').attr('disabled', false);
        }
    });

    return false;
});
