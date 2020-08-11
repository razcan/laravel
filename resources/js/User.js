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

    <label>Email</label>
    <input type="text" name="email" onChange={(event)=>this.handleChange(event, "email")} />

    <label>Password</label>
    <input type="text" name="password" onChange={(event)=>this.handleChange(event, "password")} />

    <p>Aici : {this.state.email}</p>
    <p>Aici : {this.state.password}</p>
    <p>Suma : {this.state.password * this.state.email}</p>
  
  </form>
);
  }
  }
  
  ReactDOM.render(<Input />, document.getElementById('app'));

  