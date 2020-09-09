    function Chest(pos) {
        this.basePos = this.pos = pos.plus(new Vector(0.2, 0.1));
        this.size = new Vector(1, 1);
        this.wobble = Math.random() * Math.PI * 2;
        this.type = "chest";
    }

    Chest.method("act", function(step) {
        this.wobble += step * wobbleSpeed;
        var wobblePos = Math.sin(this.wobble) * wobbleDist;
        this.pos = this.basePos.plus(new Vector(0, wobblePos));
    });