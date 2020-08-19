import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Chat extends Component {
    render() {
        return (
            <div>
                anh
            </div>
        
        );
    }
}

export default Chat;
if (document.getElementById('chat_customer')) {
    console.log("12334");
    ReactDOM.render(<Chat />, document.getElementById('chat_customer'));
}
