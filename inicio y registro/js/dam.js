const DOM =function(){

    this.id = str=>document.getElementById(str);
    this.query = (regla_css, one=false)=> one ?
                                        document.querySelector(regla_css):
                                        document.querySelectorAll(regla_css);
    this.create = (str, props = {}) =>
        Object.assign(document.createElement(str), props);
    
    this.append = (child, padre=document.body) => {
        child.length ? child.map( hijo => 
            padre.appendChild(hijo)):
            padre.appendChild(child);
    }

    this.remove =  e => e.remove();
    
}

const C = new DOM();
