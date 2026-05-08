export default function Filter(){

    return(
        <div className="filters-panel p-4 h-100 flex-shrink-0">
                    <div className="d-flex justify-content-between align-items-center mb-4">
                        <h6 className="fw-bold mb-0">Filter by</h6>
                        <a href="#" className="text-muted text-decoration-none fs-xs fw-medium">Reset all <i
                                className="fa-solid fa-xmark ms-1"></i></a>
                    </div>
 
                    {/*  RENTAL TYPE  */}
                    <div className="mb-4">
                        <label className="text-muted fs-xs fw-bold mb-3 d-block">RENTAL TYPE</label>
                        <div className="d-flex gap-2">
                            <button
                                className="btn btn-outline-secondary btn-sm rounded-pill px-3 fw-medium text-dark border-secondary">Any</button>
                            <button
                                className="btn btn-outline-secondary btn-sm rounded-pill px-3 border-light-subtle text-muted fw-medium">Per
                                day</button>
                            <button className="btn btn-outline-dark btn-sm rounded-pill px-3 fw-medium">Per hour</button>
                        </div>
                    </div>
 
                    {/*  AVAILABLE NOW ONLY  */}
                    <div className="mb-4 d-flex justify-content-between align-items-center">
                        <label className="text-muted fs-xs fw-bold mb-0">AVAILABLE NOW ONLY</label>
                        <div className="form-check form-switch fs-5 mb-0 custom-switch">
                            <input className="form-check-input" type="checkbox" role="switch" checked />
                        </div>
                    </div>
 
                    {/*  PRICE RANGE  */}
                    <div className="mb-4">
                        <div className="d-flex justify-content-between align-items-center mb-2">
                            <label className="text-muted fs-xs fw-bold mb-0">PRICE RANGE / HOUR</label>
                            <i className="fa-solid fa-chevron-up text-muted fs-xs cursor-pointer"></i>
                        </div>
                        <div className="price-chart mb-3 d-flex align-items-end justify-content-between px-1"
                            style={{height: '50px'}}>
                            <div className="bar" style={{height: '20%'}}></div>
                            <div className="bar" style={{height: '30%'}}></div>
                            <div className="bar" style={{height: '40%'}}></div>
                            <div className="bar" style={{height: '50%'}}></div>
                            <div className="bar active" style={{height: '60%'}}></div>
                            <div className="bar active" style={{height: '80%'}}></div>
                            <div className="bar active" style={{height: '100%'}}></div>
                            <div className="bar active" style={{height: '90%'}}></div>
                            <div className="bar active" style={{height: '70%'}}></div>
                            <div className="bar active" style={{height: '50%'}}></div>
                            <div className="bar active" style={{height: '40%'}}></div>
                            <div className="bar active" style={{height: '30%'}}></div>
                            <div className="bar active" style={{height: '20%'}}></div>
                            <div className="bar" style={{height: '25%'}}></div>
                            <div className="bar" style={{height: '35%'}}></div>
                            <div className="bar" style={{height: '45%'}}></div>
                        </div>
 
                        {/*  Range slider UI visual placeholder  */}
                        <div className="position-relative mb-3">
                            <div style={{height: '2px', background: '#eee', width: '100%'}}></div>
                            <div
                                style={{height: '2px', background: '#000', width: '50%', position: 'absolute', top: '0', left: '25%'}}>
                            </div>
                            <div className="slider-thumb" style={{left: '25%'}}></div>
                            <div className="slider-thumb" style={{left: '75%'}}></div>
                        </div>
 
                        <div className="d-flex gap-2">
                            <div className="bg-light p-2 rounded-3 w-50">
                                <div className="text-muted" style={{fontSize: '10px', fontWeight: '600'}}>FROM</div>
                                <div className="fw-bold fs-sm">$19.00</div>
                            </div>
                            <div className="bg-light p-2 rounded-3 w-50">
                                <div className="text-muted" style={{fontSize: '10px', fontWeight: '600'}}>TO</div>
                                <div className="fw-bold fs-sm">$98.50</div>
                            </div>
                        </div>
                    </div>
 
                    <hr className="text-black-50 my-4 opacity-10" />
 
                    {/*  CAR BRAND  */}
                    <div className="mb-4 d-flex justify-content-between align-items-center cursor-pointer">
                        <label className="text-muted fs-xs fw-bold mb-0 cursor-pointer">CAR BRAND</label>
                        <i className="fa-solid fa-chevron-down text-muted fs-xs"></i>
                    </div>
 
                    <hr className="text-black-50 my-4 opacity-10" />
 
                    {/*  CAR MODEL & YEAR  */}
                    <div className="mb-4 d-flex justify-content-between align-items-center cursor-pointer">
                        <label className="text-muted fs-xs fw-bold mb-0 cursor-pointer">CAR MODEL & YEAR</label>
                        <i className="fa-solid fa-chevron-down text-muted fs-xs"></i>
                    </div>
 
                    <hr className="text-black-50 my-4 opacity-10" />
 
                    {/*  BODY TYPE  */}
                    <div className="mb-4">
                        <div className="d-flex justify-content-between align-items-center mb-3 cursor-pointer">
                            <label className="text-muted fs-xs fw-bold mb-0 cursor-pointer">BODY TYPE</label>
                            <i className="fa-solid fa-chevron-up text-muted fs-xs"></i>
                        </div>
                        <div className="checkbox-grid">
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="sedan" />
                                <label className="form-check-label fs-sm" htmlFor="sedan">Sedan</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="wagon" />
                                <label className="form-check-label fs-sm" htmlFor="wagon">Wagon</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="coupe" />
                                <label className="form-check-label fs-sm" htmlFor="coupe">Coupe</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="hatchback" />
                                <label className="form-check-label fs-sm" htmlFor="hatchback">Hatchback</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="pickup" />
                                <label className="form-check-label fs-sm" htmlFor="pickup">Pickup</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="sport" />
                                <label className="form-check-label fs-sm" htmlFor="sport">Sport coupe</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="crossover" />
                                <label className="form-check-label fs-sm" htmlFor="crossover">Crossover</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="van" />
                                <label className="form-check-label fs-sm" htmlFor="van">Van</label>
                            </div>
                        </div>
                    </div>
 
                    <hr className="text-black-50 my-4 opacity-10" />
 
                    {/*  TRANSMISSION  */}
                    <div className="mb-4">
                        <div className="d-flex justify-content-between align-items-center mb-3 cursor-pointer">
                            <label className="text-muted fs-xs fw-bold mb-0 cursor-pointer">TRANSMISSION</label>
                            <i className="fa-solid fa-chevron-up text-muted fs-xs"></i>
                        </div>
                        <div className="d-flex gap-2">
                            <button
                                className="btn btn-outline-dark btn-sm rounded-pill px-3 fw-medium bg-white">Any</button>
                            <button
                                className="btn btn-outline-secondary btn-sm rounded-pill px-3 border-light-subtle text-muted fw-medium">Automatic</button>
                            <button
                                className="btn btn-outline-secondary btn-sm rounded-pill px-3 border-light-subtle text-muted fw-medium">Manual</button>
                        </div>
                    </div>
 
                    <hr className="text-black-50 my-4 opacity-10" />
 
                    {/*  FUEL TYPE  */}
                    <div className="mb-4">
                        <div className="d-flex justify-content-between align-items-center mb-3 cursor-pointer">
                            <label className="text-muted fs-xs fw-bold mb-0 cursor-pointer">FUEL TYPE</label>
                            <i className="fa-solid fa-chevron-up text-muted fs-xs"></i>
                        </div>
                        <div className="checkbox-grid">
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="gas" />
                                <label className="form-check-label fs-sm" htmlFor="gas">Gasoline</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="flex" />
                                <label className="form-check-label fs-sm" htmlFor="flex">Flex Fuel (E85)</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="diesel" />
                                <label className="form-check-label fs-sm" htmlFor="diesel">Diesel</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="hybrid" />
                                <label className="form-check-label fs-sm" htmlFor="hybrid">Hybrid</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="electric" />
                                <label className="form-check-label fs-sm" htmlFor="electric">Electric</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="hydrogen" />
                                <label className="form-check-label fs-sm" htmlFor="hydrogen">Hydrogen</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="other" />
                                <label className="form-check-label fs-sm" htmlFor="other">Other</label>
                            </div>
                        </div>
                    </div>
                </div>
    )
}