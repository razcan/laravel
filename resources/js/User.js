import React from 'react';
import ReactDOM from 'react-dom';

// function User() {
//     return (
//         <div className="container mt-5">
//             <div className="row justify-content-center">
//                 <div className="col-md-8">
//                     <div className="card text-center">
//                         <div className="card-header"><h2>React Component in Laravel</h2></div>

//                         <div className="card-body">I'm tiny React component in Laravel app!</div>
//                     </div>
//                 </div>
//             </div>
//         </div>
//     );
// }

// export default User;

// DOM element
// if (document.getElementById('user')) {
//     ReactDOM.render(<User />, document.getElementById('user'));
// }

class Input extends React.Component {
    constructor(props) {
      super(props);
    //   this.state = {value: 'Hello React'};
      this.state = {value: ''};
      this.state2 = {value: 'kk'};
      this.handleChange = this.handleChange.bind(this);
    }
    
    handleChange(e) {
      this.setState({value: e.target.value});
    }
  
    
    render() {
      return(
        <div className="container">
          <h1 className="intro">Binding data with React</h1>
          <div className="box">
            
            <input className="input is-medium" type='text' id='input' value={this.state.value} onChange={this.handleChange} />
            <input className="input is-medium" type='text' id='input2' value={this.state2.value} onChange={this.handleChange} />
            <p className="input-value">The value of the input is: <span className="highlight">{this.state.value}</span></p>
            <p className="input-value">The time is: <span className="highlight"><h2>It is {new Date().toLocaleTimeString()}.</h2></span></p>
          </div>
        </div>
      );
    }
  }
  
  ReactDOM.render(<Input />, document.getElementById('app'));
  ReactDOM.render(<Input />, document.getElementById('app2'));
  