import { useState } from "react"

export default function Card(){
    //React Hooks
    var cont:number=10
    const [contador, setContador] = useState(5)
    const aumentar = ()=>{
        cont++
        console.log("Holaa" ,cont)
        setContador(contador+1)
        
    }
    return (
       <>
            <h1>Card {contador}</h1>
            <button onClick={aumentar}>Hola</button>
        
       </>

    )
}