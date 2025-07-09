class CustomFeedback {
    constructor(parameters) {
        this.idFormComment = parameters.idFormComment;
        this.idBook = parameters.idBook;
        this.init()
    }

    init() {
        BX.bind(BX(this.idFormComment), 'submit', BX.delegate(this.sendComment, this));
    }

    sendComment() {
        event.preventDefault()
        let textComment= document.getElementById("comment");

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

