import "./App.css";
import { Route, Routes } from "react-router-dom";
import Register from "./Pages/Auth/RegisterUser";
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.bundle.min.js";
// import "./plugins/fontawesome-free/css/all.min.css";
import LoginUser from "./Pages/Auth/LoginUser";
import Dashboard from "./Pages/Dashboard/Dashboard";
import LoginAdmin from "./Pages/Auth/LoginAdmin";
import Authrequired from "./Pages/Auth/Authrequired";
import User from "./Pages/Dashboard/User";
import UserProfile from "./Pages/Dashboard/UserProfile";

function App() {
  return (
    <div className="App">
      <Routes>
      <Route path="loginAdmin" element={<LoginAdmin />}></Route>
        {/* public Route */}

        <Route path="register" element={<Register />}></Route>
        <Route path="loginUser" element={<LoginUser />}></Route>

        {/* protected Route */}
        <Route element={<Authrequired />}>
          <Route path="/dashboard" element={<Dashboard />}>
            <Route index path="users" element={<User />}></Route>
            <Route path="userProfile/:id" element={<UserProfile />}></Route>
          </Route>
        </Route>
      </Routes>
    </div>
  );
}

export default App;
