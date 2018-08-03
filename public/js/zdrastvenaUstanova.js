
class DatumIVreme {
    static get() {
        var d = new Date();
        return "[" + d.getDate() + "." + d.getMonth() + "." + d.getFullYear() + " " + 
                d.getHours() + ":" + d.getMinutes() + "]";
    }
}

var preglediEnum = {
    "t1" : { pregled : "nivo secera u krvi" },
    "t2" : { pregled : "nivo holesterola u krvi"}
}

class Doktor { 
    constructor(ime, prezime, specijalnost) {
        this.ime = ime;
        this.prezime = prezime;
        this.specijalnost = specijalnost;
        this.pacijenti = new Set();
        console.log(DatumIVreme.get() + " Kreiran doktor " + this.ime);
    }

    zakaziPregledKrvnogPritiska(pacijent, datum, vreme) {
        return new KrvniPritisak(datum, vreme, pacijent);    
    }

    zakaziPregled(tipPregleda, pacijent, datum, vreme, vremePoslednjegObroka) {
        if (tipPregleda === "nivo secera u krvi") {
            return new NivoSeceraUKrvi(datum, vreme, pacijent, vremePoslednjegObroka);
        } else if (tipPregleda === "nivo holesterola u krvi") {
            return new NivoHolesterolaUKrvi(datum, vreme, pacijent, vremePoslednjegObroka);
        } else {
            console.error("Nepostojeci unos tipa pregleda!");
        }   
    }
}

class Pacijent {
    constructor(ime, prezime, jmbg, brojZdrastvenogKartona) {
        this.ime = ime;
        this.prezime = prezime;
        this.jmbg = jmbg;
        this.brojZdrastvenogKartona = brojZdrastvenogKartona;
        this.doktor = null;
        console.log(DatumIVreme.get() + " Kreiran pacijent " + this.ime);
    }

    odaberiLekara(doktor) {
        if (this.doktor == null) {
            doktor.pacijenti.add(this);
            this.doktor = doktor;
            console.log(DatumIVreme.get() + " Pacijent " + this.ime + 
                        " izabrao doktora po imenu " + doktor.ime);
        } else {
            console.error("Pacijent moze da ima samo jednog lekara");
        }
        
    }
}

class Pregled {
    constructor(datum, vreme, pacijent) {
        this.datum = datum;
        this.vreme = vreme;
        this.pacijent = pacijent;
    }
}

class KrvniPritisak extends Pregled {
    constructor(datum, vreme, pacijent) {
        super(datum, vreme, pacijent);
        this.gornjaVrednost = null;
        this.donjaVrednost = null;
        this.puls = null;
    }

    uradiTest() {
        console.info(DatumIVreme.get() + " Pacijent " + this.pacijent.ime + 
                     " obavlja pregled krvnog pritiska");
        this.gornjaVrednost = Math.random();
        this.donjaVrednost = Math.random();
        this.puls = Math.random();
        console.info("Gornja vrednost krvnog pritiska je: " + this.gornjaVrednost +
                         ", donja vrednost je: " + this.donjaVrednost + 
                         ", puls je: " + this.puls);
    }
}

class NivoSeceraUKrvi extends Pregled {
    constructor(datum, vreme, pacijent, vremePoslednjegObroka) {
        super(datum, vreme, pacijent);
        this.vremePoslednjegObroka = vremePoslednjegObroka;
        this.vrednost = null;
    }

    uradiTest() {
        console.info(DatumIVreme.get() + " Pacijent " + this.pacijent.ime + 
                     " obavlja pregled nivoa secera u krvi");
        this.vrednost = Math.random();
        console.info("Nivo secera u krvi je: " + this.vrednost);
    }
}

class NivoHolesterolaUKrvi extends Pregled {
    constructor(datum, vreme, pacijent, vremePoslednjegObroka) {
        super(datum, vreme, pacijent);
        this.vremePoslednjegObroka = vremePoslednjegObroka;
        this.vrednost = null;
    }

    uradiTest() {
        console.info(DatumIVreme.get() + " Pacijent " + this.pacijent.ime + 
                     " obavlja pregled nivoa holesterola u krvi");
        this.vrednost = Math.random();
        console.info("Nivo holesterola u krvi je: " + this.vrednost);
    }
}

d1 = new Doktor("Milan", "Milovanovic", "ortoped");
p1 = new Pacijent("Dragan", "Milovanovic", "232321331", "1");

p1.odaberiLekara(d1);

pregled1 = d1.zakaziPregled(preglediEnum.t1.pregled, p1, "2.2.2010", "16", "7");
pregled2 = d1.zakaziPregledKrvnogPritiska(p1, "2.2.2010", "16");

pregled1.uradiTest();
pregled2.uradiTest();


