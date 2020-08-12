import React from 'react';
import ReactDOM from 'react-dom';
import { useState } from 'react';


class Input extends React.Component {

  constructor () {
    super();
    this.state = {
      email: '',
      password: ''
    };
    this.handleChange = this.handleChange.bind(this);
  }

  handleChange (evt, field) {
    // check it out: we get the evt.target.name (which will be either "email" or "password")
    // and use it to target the key on our `state` object with the same name, using bracket syntax
    this.setState({ [field]: evt.target.value });
  }

render () {
    return (
  <form>

    <label>Cifra 1</label>
    <input type="text" name="email" onChange={(event)=>this.handleChange(event, "email")} />

    <label>Cifra 2</label>
    <input type="text" name="password" onChange={(event)=>this.handleChange(event, "password")} />

    <p>Cifra 1 : {this.state.email}</p>
    <p>Cifra 2 : {this.state.password}</p>
    <p>Produs : {this.state.password * this.state.email}</p>
  
  </form>
);
  }
  }
  
  ReactDOM.render(<Input />, document.getElementById('app'));

  