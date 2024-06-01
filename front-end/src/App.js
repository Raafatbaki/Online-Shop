import './App.css';
import { Route, Routes } from 'react-router-dom';
import Register from './Pages/Auth/RegisterUser';
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.bundle.min.js";

function App() {
  return (
    <div className="App">
      <Routes>
        <Route path="register" element={<Register />}></Route>
      </Routes>
    </div>
  );
}

export default App;
