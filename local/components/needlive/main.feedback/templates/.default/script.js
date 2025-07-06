class CustomFeedback {
    constructor(parameters) {
        this.idFormComment = parameters.idFormComment;
        this.init()
    }

    init() {
        BX.bind(BX(this.idFormComment), 'submit', this.sendComment);
    }

    sendComment() {
        event.preventDefault()
        let textComment= document.getElementById("comment");
        console.log(textComment.value);
    }


}



// function serializeForm(sendmessage){
// let sendmessage = 123
//     console.log("sendmessage")
// }
//
// function handleFormSubmit(event) {
//     event.preventDefault()
//     serializeForm(applicantForm)
// }
//
// const applicantForm = document.getElementById('feedback-form')
// applicantForm.addEventListener('button', handleFormSubmit)

