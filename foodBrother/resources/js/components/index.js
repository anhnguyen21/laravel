import ReactDOM from 'react-dom';
import React, { Component } from 'react';
import axios from "axios";
import Card from "./addCart";
import NewPro from "./newPro";
import YT from "./yeuthich";

class Index extends Component {
    constructor(props){
        super(props);
        this.state={
            chat : [],
            chatbox : ""
        }
        // this.onChangeHandler=this.onChangeHandler(this);
        // this.loadMessage=this.loadMessage(this);
        this.load=this.load.bind(this);
    }
    componentDidMount(){
        this.load();
    }
    load(){
        axios({
            method : "GET",
            url : "http://localhost/foodBrother/getchat",
            data : null
        }).then(res=>{
            this.setState({ chat : res.data});
            console.log(res.data);
        }).catch(error=> console.log(error));
        this.loadMessage();
    }
    onChangeHandler(event){
        let nam = event.target.name;
        let val = event.target.value;
        // if (nam == "img") {
        //   val = "image/" + event.target.files[0].name;
        // }
        this.setState({ [nam]: val });
        console.log(this.state);
    };
    submit(e){
        e.preventDefault();
        e.target.reset();
        const chatbox={ chatbox : this.state.chatbox }
        console.log(chatbox);
        axios({
            method: 'POST',
            url: `http://localhost/foodBrother/api/home`,
            data: chatbox,
            headers:{
              'Accept':'application/json',
              'Content-Type':'application/json', 
            }
            }).then((resp) => {
                console.log(resp)
                this.load();
            }
        ).catch(error => console.log(error));
        // this.load();
    }
    loadMessage(){
        var mess=this.state.chat.map((mess,id)=>{
           if(mess.id_user!=1){
               return  <div className="row msg_container base_sent">
                            <div className="col-md-10 col-xs-10">
                                <div className="messages msg_sent">
                                <p>{mess.message}</p>
                                <time dateTime="2009-11-13T20:00">{mess.time}</time>
                                </div>
                            </div>
                            <div className="col-md-2 col-xs-2 avatar">
                                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" className=" img-responsive " />
                            </div>
                        </div>
           }else{
               if(mess.id_rep==2)
                return   <div className="row msg_container base_receive">
                            <div className="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" className=" img-responsive " />
                            </div>
                            <div className="col-md-10 col-xs-10">
                            <div className="messages msg_receive">
                                <p>{mess.message}</p>
                                <time dateTime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                            </div>
                        </div>
           }
        })
        return mess;
    }
    render() {
        return (
            <div>
                <div className="container chatbox" style={{display: 'none'}}>
                <div className="row chat-window col-xs-5 col-md-3" id="chat_window_1" style={{marginLeft: '10px'}}>
                    <div className="col-xs-12 col-md-12">
                    <div className="panel panel-default">
                        <div className="panel-heading top-bar">
                        <div className="container">
                            <div className="row" style={{justifyContent: 'space-between'}}>
                            <h5 className="panel-title"><span className="glyphicon glyphicon-comment">Chat - Miguel</span></h5>
                            <i className="fa fa-times" id="close" aria-hidden="true" />
                            </div>
                        </div>
                        <div className="col-md-4 col-xs-4" style={{textAlign: 'right'}}>
                            <a href="#"><span id="minim_chat_window" className="glyphicon glyphicon-minus icon_minim" /></a>
                            <a href="#"><span className="glyphicon glyphicon-remove icon_close" data-id="chat_window_1" /></a>
                        </div>
                        </div>
                       
                        <div className="panel-body msg_container_base">
                           
                            {this.loadMessage()}
                        </div>
                        <form onSubmit={(e)=>this.submit(e)}>
                            <div className="panel-footer">
                                <div className="input-group">
                                <input id="btn-input" name="chatbox" type="text" 
                                className="form-control input-sm chat_input" placeholder="Write your message here..." 
                                onChange={(e)=>this.onChangeHandler(e)}
                                />
                                <span className="input-group-btn">
                                    <button className="btn btn-primary" id="btn-chat">Send</button>
                                </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                <div className="btn-group dropup">
                    <button type="button" className="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span className="glyphicon glyphicon-cog" />
                    <span className="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul className="dropdown-menu" role="menu">
                    <li><a href="#" id="new_chat"><span className="glyphicon glyphicon-plus" /> Novo</a></li>
                    <li><a href="#"><span className="glyphicon glyphicon-list" /> Ver outras</a></li>
                    <li><a href="#"><span className="glyphicon glyphicon-remove" /> Fechar Tudo</a></li>
                    <li className="divider" />
                    <li><a href="#"><span className="glyphicon glyphicon-eye-close" /> Invisivel</a></li>
                    </ul>
                </div>
                </div>
            </div>
        );
    }
}

export default Index;

if (document.getElementById('chatReact')) {
    ReactDOM.render(<Index />, document.getElementById('chatReact'));
}
if (document.getElementById('addcart')) {
    ReactDOM.render(<Card />, document.getElementById('addcart'));
}
if (document.getElementById('newPro')) {
    ReactDOM.render(<NewPro />, document.getElementById('newPro'));
}
if (document.getElementById('yeuthich')) {
    ReactDOM.render(<YT />, document.getElementById('yeuthich'));
}
