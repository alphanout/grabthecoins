    function Animal(pos, type) {
        this.pos = pos;
        this.size = new Vector(1, 1);
        if (type == "q") {
        this.speed = new Vector(2, 0);
        } 
    }

    Animal.method("act", function(step, level) {
        var newPos = this.pos.plus(this.speed.times(step));
        if (!level.obstacleAt(newPos, this.size))
        this.pos = newPos;
        else if (this.repeatPos)
        this.pos = this.repeatPos;
        else
        this.speed = this.speed.times(-1);
    });