import './App.css';
import { Route, Routes } from 'react-router-dom';
import Register from './Pages/Auth/RegisterUser';
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.bundle.min.js";
// import "./plugins/fontawesome-free/css/all.min.css";
import LoginUser from './Pages/Auth/LoginUser';

function App() {
  return (
    <div className="App">
      <Routes>
        <Route path="register" element={<Register />}></Route>
        <Route path="loginUser" element={<LoginUser />}></Route>
      </Routes>
    </div>
  );
}

export default App;
