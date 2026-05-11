import type Car from '../interfaces/car'
interface Props{
    dato:Car
}
export default function carComponent({dato}:Props){
var API_ASSETS=import.meta.env.VITE_API_ASSETS

return (
            <>
            <div className="car-card">
                        <div className="d-flex justify-content-between align-items-center mb-3">
                            <div className="d-flex align-items-center gap-3 fs-sm fw-medium">
                                <div className="text-dark"><i className="fa-solid fa-person-walking text-muted me-2"></i>120m
                                    <span className="text-muted fw-normal">(4 min)</span>
                                </div>
                                <div className="text-warning"><i className="fa-solid fa-star"></i> <span className="text-dark">4.7
                                        <span className="text-muted fw-normal">(109)</span></span></div>
                            </div>
                            <i className="fa-regular fa-heart text-muted fs-5 cursor-pointer hover-danger"></i>
                        </div>
                        <img src={`${API_ASSETS}/cars/${dato.img}`}
                            className="car-img" alt="Audi A4" />
                        <div className="d-flex justify-content-between align-items-end mt-3">
                            <div>
                                <h5 className="fw-bold mb-1">Audi A4</h5>
                                <div className="text-muted fs-sm">2.0 TFSI Sport (249 hp, Quattro)</div>
                            </div>
                            <div className="text-end">
                                <span className="fs-5 fw-bold">$24.59</span><span className="text-muted fs-sm"> / hour</span>
                            </div>
                        </div>
                    </div>
            </>
        )
}