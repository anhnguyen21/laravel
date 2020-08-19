import ReactDOM from 'react-dom';
import React, { Component } from 'react';
import axios from "axios";

class NewPro extends Component {
    constructor(props){
        super(props);
        this.state={
            product : [],
        }
        
    }
    componentDidMount(){
        this.load();
    }
    load(){
        axios({
            method : "GET",
            url : "http://localhost/foodBrother/api/newPro",
            data : null
        }).then(res=>{
            this.setState({ product : res.data});
            console.log(this.state);
        }).catch(error=> console.log(error));
       
    }
    addCart(id){
        axios({
            method : "GET",
            url : `http://localhost/foodBrother/api/addCard/${id}`,
            data : null
        }).then(res=>{
            // this.setState({ product : res.data});
            console.log(this.state);
        }).catch(error=> console.log(error));
        console.log(id);
    }
    loadProduct(){
        var pro=this.state.product.map((pro,id)=>{
            return <div className="col-md-3 margin_cart">
                        <div className="container cart_content">
                        <img src={pro.image} alt="" />
                        <h2><span>{pro.title}</span><span>{pro.unit_price} đ</span></h2>
                        <ul>
                            <li>
                            <button onClick={()=>this.addCart(pro.id)}><i className="fa fa-shopping-cart" aria-hidden="true" /></button>
                            </li>
                            <li>
                            <a href="#"><i className="fa fa-reddit-alien" aria-hidden="true" /></a>
                            </li>
                            <li>
                            <a href="#"><i className="fa fa-heart" aria-hidden="true" /></a>
                            </li>
                        </ul>
                        </div>
                    </div>
        })
        return pro;
    }
    render() {
        return (
            <div class="row">
                {this.loadProduct()}
            </div>
           
        );
    }
}

export default NewPro;

// npm run watch-poll
// chay lai trong qua trinh chay