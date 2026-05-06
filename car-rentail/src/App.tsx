import Dashboard from "./views/Dashboard"
import "./App.css"
import Contacto from "./views/Contacto"
import { BrowserRouter,Route, Routes} from "react-router-dom"

function App() {
  
  return (
    <BrowserRouter>
    
    
    
     <Routes>
            <Route path='/' element={<Dashboard />} />
            <Route path='/Contacto' element={<Contacto />} />
        </Routes>
    </BrowserRouter>
      
  )
}

export default App
