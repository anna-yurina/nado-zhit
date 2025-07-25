class CustomFeedback {
    constructor(parameters) {
        this.idFormComment = parameters.idFormComment;
        this.idBook = parameters.idBook;
        this.idUserName = parameters.idUserName;
        this.idTextComment = parameters.idTextComment;
        this.init()
    }

    init() {
        BX.bind(BX(this.idFormComment), 'submit', BX.delegate(this.sendComment, this));
    }

    sendComment() {
        event.preventDefault()
        let textComment= document.getElementById(this.idTextComment);
        let userName = document.getElementById(this.idUserName);

        BX.ajax.runComponentAction(
            "needlive:book.comments",
            "sendComment",
            {
                url: '/local/components/needlive/book.comments/ajax.php',
                method: 'POST',
                mode: "ajax",
                data: {
                    comment: textComment.value,
                    idBook: this.idBook,
                    userName: userName.value,
                },
            }
        ).then(function (success) {
            location.reload()
            }, function (error) {
                console.log(error);
            }
        );
    }
}

