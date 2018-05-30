<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/30
 */

/**
 * Class TriangleFigure
 */
class TriangleFigure
{
    private $base = null;
    private $height = null;

    public function __construct(float $base, float $height)
    {
        $this->setBase($base);
        $this->setHeight($height);
    }

    /**
     * baseを取得
     * @return float
     */
    public function getBase(): float
    {
        return $this->base;
    }

    /**
     * baseを設定
     * @param float $base
     * @throws Exception
     */
    public function setBase(float $base): void
    {
        if ($base <= 0 or is_null($base)){
            throw new Exception('$baseの値が不正です' . $base);
        };
        $this->base = $base;
    }

    /**
     * heightを取得
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * heightを設定
     * @param float $height
     * @throws Exception
     */
    public function setHeight(float $height): void
    {
        if ($height <= 0 or is_null($height)){
            throw new Exception('$heightの値が不正です' . $height);
        };
        $this->height = $height;
    }

    /**
     * 面積の計算結果を返す
     * @return float
     */
    public function getArea(): float
    {
        return $this->getBase() * $this->getHeight() / 2;
    }
}