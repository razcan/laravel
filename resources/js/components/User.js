import React from 'react';
import ReactDOM from 'react-dom';
import {GMap} from 'primereact/gmap';
import 'primeicons/primeicons.css';
import 'primereact/resources/themes/nova-light/theme.css';
import 'primereact/resources/primereact.css';


function User() {
    return (
        <div className="container mt-5">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card text-center">
                        <div className="card-header"><h2>React Component in Laravel</h2></div>

                        <div className="card-body">I'm tiny React component in Laravel app!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

function User2() {
    return (
        <div className="container mt-5">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card text-center">
                        <div className="card-header"><h2>React Component in Laravel2</h2></div>

                        <div className="card-body">I'm tiny React component in Laravel ap2!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

function Prime5() {
    return (
       
                        <div className="card-header"><h2>React Component in Laravel5</h2></div>
                        
    );
}


// ReactDOM.render(
//     <h1>Hello, world!</h1>,
//     document.getElementById('root')
//   );

//export default User;

// DOM element
 if (document.getElementById('user')) {
     ReactDOM.render(<Prime5 />, document.getElementById('user'));
 }

// const rootElement = document.getElementById("root");
// ReactDOM.render(<Prime5 />, rootElement);