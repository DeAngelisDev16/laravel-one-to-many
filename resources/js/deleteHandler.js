const deleteForms = document.querySelectorAll('form.form-deleter');

deleteForms.forEach((formElement) => {
    formElement.addEventListener('submit', function (event) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit(),
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success',

                    )
            }
        })

    })

});


