 export default {
    showSuccess(title, message) {
        Swal.fire(
            title, 
            message,
            'success'
        )
    },
    showError(title, message) {
        Swal.fire({
            type: '',
            title: title,
            text:message
        })
    }
}