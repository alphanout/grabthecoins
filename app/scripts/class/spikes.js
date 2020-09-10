    function Spike(pos, type) {
        this.pos = pos;
        this.size = new Vector(1, 1);
        this.type = "spike";

        if (type == "s") {
        this.speed = new Vector(0, 3);
        this.repeatPos = pos;
        }
    }

    Spike.method("act", function(step, level) {
        var newPos = this.pos.plus(this.speed.times(step));
        if (!level.isBlockedAt(newPos, this.size))
        this.pos = newPos;
        else if (this.repeatPos)
        this.pos = this.repeatPos;
        else
        this.speed = this.speed.times(-1);
    });