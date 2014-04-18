<?php

namespace Proxies\__CG__\Rdg\SoccerBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Soccergame extends \Rdg\SoccerBundle\Entity\Soccergame implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'div', 'date', 'hometeam', 'awayteam', 'fthg', 'ftag', 'ftr', 'hthg', 'htag', 'htr', 'b365h', 'b365d', 'b365a', 'bwh', 'bwd', 'bwa', 'gbh', 'gbd', 'gba', 'iwh', 'iwd', 'iwa', 'lbh', 'lbd', 'lba', 'psh', 'psd', 'psa', 'whh', 'whd', 'wha', 'sjh', 'sjd', 'sja', 'vch', 'vcd', 'vca', 'bsh', 'bsd', 'bsa', 'bb1x2', 'bbmxh', 'bbavh', 'bbmxd', 'bbavd', 'bbmxa', 'bbava', 'bbou', 'bbmxgt25', 'bbavgt25', 'bbmxlt25', 'bbavlt25', 'bbah', 'bbahh', 'bbmxahh', 'bbavahh', 'bbmxaha', 'bbavaha');
        }

        return array('__isInitialized__', 'div', 'date', 'hometeam', 'awayteam', 'fthg', 'ftag', 'ftr', 'hthg', 'htag', 'htr', 'b365h', 'b365d', 'b365a', 'bwh', 'bwd', 'bwa', 'gbh', 'gbd', 'gba', 'iwh', 'iwd', 'iwa', 'lbh', 'lbd', 'lba', 'psh', 'psd', 'psa', 'whh', 'whd', 'wha', 'sjh', 'sjd', 'sja', 'vch', 'vcd', 'vca', 'bsh', 'bsd', 'bsa', 'bb1x2', 'bbmxh', 'bbavh', 'bbmxd', 'bbavd', 'bbmxa', 'bbava', 'bbou', 'bbmxgt25', 'bbavgt25', 'bbmxlt25', 'bbavlt25', 'bbah', 'bbahh', 'bbmxahh', 'bbavahh', 'bbmxaha', 'bbavaha');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Soccergame $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setFthg($fthg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFthg', array($fthg));

        return parent::setFthg($fthg);
    }

    /**
     * {@inheritDoc}
     */
    public function getFthg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFthg', array());

        return parent::getFthg();
    }

    /**
     * {@inheritDoc}
     */
    public function setFtag($ftag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFtag', array($ftag));

        return parent::setFtag($ftag);
    }

    /**
     * {@inheritDoc}
     */
    public function getFtag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFtag', array());

        return parent::getFtag();
    }

    /**
     * {@inheritDoc}
     */
    public function setFtr($ftr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFtr', array($ftr));

        return parent::setFtr($ftr);
    }

    /**
     * {@inheritDoc}
     */
    public function getFtr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFtr', array());

        return parent::getFtr();
    }

    /**
     * {@inheritDoc}
     */
    public function setHthg($hthg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHthg', array($hthg));

        return parent::setHthg($hthg);
    }

    /**
     * {@inheritDoc}
     */
    public function getHthg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHthg', array());

        return parent::getHthg();
    }

    /**
     * {@inheritDoc}
     */
    public function setHtag($htag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHtag', array($htag));

        return parent::setHtag($htag);
    }

    /**
     * {@inheritDoc}
     */
    public function getHtag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHtag', array());

        return parent::getHtag();
    }

    /**
     * {@inheritDoc}
     */
    public function setHtr($htr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHtr', array($htr));

        return parent::setHtr($htr);
    }

    /**
     * {@inheritDoc}
     */
    public function getHtr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHtr', array());

        return parent::getHtr();
    }

    /**
     * {@inheritDoc}
     */
    public function setB365h($b365h)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setB365h', array($b365h));

        return parent::setB365h($b365h);
    }

    /**
     * {@inheritDoc}
     */
    public function getB365h()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getB365h', array());

        return parent::getB365h();
    }

    /**
     * {@inheritDoc}
     */
    public function setB365d($b365d)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setB365d', array($b365d));

        return parent::setB365d($b365d);
    }

    /**
     * {@inheritDoc}
     */
    public function getB365d()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getB365d', array());

        return parent::getB365d();
    }

    /**
     * {@inheritDoc}
     */
    public function setB365a($b365a)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setB365a', array($b365a));

        return parent::setB365a($b365a);
    }

    /**
     * {@inheritDoc}
     */
    public function getB365a()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getB365a', array());

        return parent::getB365a();
    }

    /**
     * {@inheritDoc}
     */
    public function setBwh($bwh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBwh', array($bwh));

        return parent::setBwh($bwh);
    }

    /**
     * {@inheritDoc}
     */
    public function getBwh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBwh', array());

        return parent::getBwh();
    }

    /**
     * {@inheritDoc}
     */
    public function setBwd($bwd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBwd', array($bwd));

        return parent::setBwd($bwd);
    }

    /**
     * {@inheritDoc}
     */
    public function getBwd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBwd', array());

        return parent::getBwd();
    }

    /**
     * {@inheritDoc}
     */
    public function setBwa($bwa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBwa', array($bwa));

        return parent::setBwa($bwa);
    }

    /**
     * {@inheritDoc}
     */
    public function getBwa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBwa', array());

        return parent::getBwa();
    }

    /**
     * {@inheritDoc}
     */
    public function setGbh($gbh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGbh', array($gbh));

        return parent::setGbh($gbh);
    }

    /**
     * {@inheritDoc}
     */
    public function getGbh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGbh', array());

        return parent::getGbh();
    }

    /**
     * {@inheritDoc}
     */
    public function setGbd($gbd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGbd', array($gbd));

        return parent::setGbd($gbd);
    }

    /**
     * {@inheritDoc}
     */
    public function getGbd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGbd', array());

        return parent::getGbd();
    }

    /**
     * {@inheritDoc}
     */
    public function setGba($gba)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGba', array($gba));

        return parent::setGba($gba);
    }

    /**
     * {@inheritDoc}
     */
    public function getGba()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGba', array());

        return parent::getGba();
    }

    /**
     * {@inheritDoc}
     */
    public function setIwh($iwh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIwh', array($iwh));

        return parent::setIwh($iwh);
    }

    /**
     * {@inheritDoc}
     */
    public function getIwh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIwh', array());

        return parent::getIwh();
    }

    /**
     * {@inheritDoc}
     */
    public function setIwd($iwd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIwd', array($iwd));

        return parent::setIwd($iwd);
    }

    /**
     * {@inheritDoc}
     */
    public function getIwd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIwd', array());

        return parent::getIwd();
    }

    /**
     * {@inheritDoc}
     */
    public function setIwa($iwa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIwa', array($iwa));

        return parent::setIwa($iwa);
    }

    /**
     * {@inheritDoc}
     */
    public function getIwa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIwa', array());

        return parent::getIwa();
    }

    /**
     * {@inheritDoc}
     */
    public function setLbh($lbh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLbh', array($lbh));

        return parent::setLbh($lbh);
    }

    /**
     * {@inheritDoc}
     */
    public function getLbh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLbh', array());

        return parent::getLbh();
    }

    /**
     * {@inheritDoc}
     */
    public function setLbd($lbd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLbd', array($lbd));

        return parent::setLbd($lbd);
    }

    /**
     * {@inheritDoc}
     */
    public function getLbd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLbd', array());

        return parent::getLbd();
    }

    /**
     * {@inheritDoc}
     */
    public function setLba($lba)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLba', array($lba));

        return parent::setLba($lba);
    }

    /**
     * {@inheritDoc}
     */
    public function getLba()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLba', array());

        return parent::getLba();
    }

    /**
     * {@inheritDoc}
     */
    public function setPsh($psh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPsh', array($psh));

        return parent::setPsh($psh);
    }

    /**
     * {@inheritDoc}
     */
    public function getPsh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPsh', array());

        return parent::getPsh();
    }

    /**
     * {@inheritDoc}
     */
    public function setPsd($psd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPsd', array($psd));

        return parent::setPsd($psd);
    }

    /**
     * {@inheritDoc}
     */
    public function getPsd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPsd', array());

        return parent::getPsd();
    }

    /**
     * {@inheritDoc}
     */
    public function setPsa($psa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPsa', array($psa));

        return parent::setPsa($psa);
    }

    /**
     * {@inheritDoc}
     */
    public function getPsa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPsa', array());

        return parent::getPsa();
    }

    /**
     * {@inheritDoc}
     */
    public function setWhh($whh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWhh', array($whh));

        return parent::setWhh($whh);
    }

    /**
     * {@inheritDoc}
     */
    public function getWhh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWhh', array());

        return parent::getWhh();
    }

    /**
     * {@inheritDoc}
     */
    public function setWhd($whd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWhd', array($whd));

        return parent::setWhd($whd);
    }

    /**
     * {@inheritDoc}
     */
    public function getWhd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWhd', array());

        return parent::getWhd();
    }

    /**
     * {@inheritDoc}
     */
    public function setWha($wha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWha', array($wha));

        return parent::setWha($wha);
    }

    /**
     * {@inheritDoc}
     */
    public function getWha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWha', array());

        return parent::getWha();
    }

    /**
     * {@inheritDoc}
     */
    public function setSjh($sjh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSjh', array($sjh));

        return parent::setSjh($sjh);
    }

    /**
     * {@inheritDoc}
     */
    public function getSjh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSjh', array());

        return parent::getSjh();
    }

    /**
     * {@inheritDoc}
     */
    public function setSjd($sjd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSjd', array($sjd));

        return parent::setSjd($sjd);
    }

    /**
     * {@inheritDoc}
     */
    public function getSjd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSjd', array());

        return parent::getSjd();
    }

    /**
     * {@inheritDoc}
     */
    public function setSja($sja)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSja', array($sja));

        return parent::setSja($sja);
    }

    /**
     * {@inheritDoc}
     */
    public function getSja()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSja', array());

        return parent::getSja();
    }

    /**
     * {@inheritDoc}
     */
    public function setVch($vch)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVch', array($vch));

        return parent::setVch($vch);
    }

    /**
     * {@inheritDoc}
     */
    public function getVch()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVch', array());

        return parent::getVch();
    }

    /**
     * {@inheritDoc}
     */
    public function setVcd($vcd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVcd', array($vcd));

        return parent::setVcd($vcd);
    }

    /**
     * {@inheritDoc}
     */
    public function getVcd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVcd', array());

        return parent::getVcd();
    }

    /**
     * {@inheritDoc}
     */
    public function setVca($vca)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVca', array($vca));

        return parent::setVca($vca);
    }

    /**
     * {@inheritDoc}
     */
    public function getVca()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVca', array());

        return parent::getVca();
    }

    /**
     * {@inheritDoc}
     */
    public function setBsh($bsh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBsh', array($bsh));

        return parent::setBsh($bsh);
    }

    /**
     * {@inheritDoc}
     */
    public function getBsh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBsh', array());

        return parent::getBsh();
    }

    /**
     * {@inheritDoc}
     */
    public function setBsd($bsd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBsd', array($bsd));

        return parent::setBsd($bsd);
    }

    /**
     * {@inheritDoc}
     */
    public function getBsd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBsd', array());

        return parent::getBsd();
    }

    /**
     * {@inheritDoc}
     */
    public function setBsa($bsa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBsa', array($bsa));

        return parent::setBsa($bsa);
    }

    /**
     * {@inheritDoc}
     */
    public function getBsa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBsa', array());

        return parent::getBsa();
    }

    /**
     * {@inheritDoc}
     */
    public function setBb1x2($bb1x2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBb1x2', array($bb1x2));

        return parent::setBb1x2($bb1x2);
    }

    /**
     * {@inheritDoc}
     */
    public function getBb1x2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBb1x2', array());

        return parent::getBb1x2();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbmxh($bbmxh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbmxh', array($bbmxh));

        return parent::setBbmxh($bbmxh);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbmxh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbmxh', array());

        return parent::getBbmxh();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbavh($bbavh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbavh', array($bbavh));

        return parent::setBbavh($bbavh);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbavh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbavh', array());

        return parent::getBbavh();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbmxd($bbmxd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbmxd', array($bbmxd));

        return parent::setBbmxd($bbmxd);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbmxd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbmxd', array());

        return parent::getBbmxd();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbavd($bbavd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbavd', array($bbavd));

        return parent::setBbavd($bbavd);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbavd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbavd', array());

        return parent::getBbavd();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbmxa($bbmxa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbmxa', array($bbmxa));

        return parent::setBbmxa($bbmxa);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbmxa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbmxa', array());

        return parent::getBbmxa();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbava($bbava)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbava', array($bbava));

        return parent::setBbava($bbava);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbava()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbava', array());

        return parent::getBbava();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbou($bbou)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbou', array($bbou));

        return parent::setBbou($bbou);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbou()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbou', array());

        return parent::getBbou();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbmxgt25($bbmxgt25)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbmxgt25', array($bbmxgt25));

        return parent::setBbmxgt25($bbmxgt25);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbmxgt25()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbmxgt25', array());

        return parent::getBbmxgt25();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbavgt25($bbavgt25)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbavgt25', array($bbavgt25));

        return parent::setBbavgt25($bbavgt25);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbavgt25()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbavgt25', array());

        return parent::getBbavgt25();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbmxlt25($bbmxlt25)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbmxlt25', array($bbmxlt25));

        return parent::setBbmxlt25($bbmxlt25);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbmxlt25()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbmxlt25', array());

        return parent::getBbmxlt25();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbavlt25($bbavlt25)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbavlt25', array($bbavlt25));

        return parent::setBbavlt25($bbavlt25);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbavlt25()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbavlt25', array());

        return parent::getBbavlt25();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbah($bbah)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbah', array($bbah));

        return parent::setBbah($bbah);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbah()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbah', array());

        return parent::getBbah();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbahh($bbahh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbahh', array($bbahh));

        return parent::setBbahh($bbahh);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbahh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbahh', array());

        return parent::getBbahh();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbmxahh($bbmxahh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbmxahh', array($bbmxahh));

        return parent::setBbmxahh($bbmxahh);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbmxahh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbmxahh', array());

        return parent::getBbmxahh();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbavahh($bbavahh)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbavahh', array($bbavahh));

        return parent::setBbavahh($bbavahh);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbavahh()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbavahh', array());

        return parent::getBbavahh();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbmxaha($bbmxaha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbmxaha', array($bbmxaha));

        return parent::setBbmxaha($bbmxaha);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbmxaha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbmxaha', array());

        return parent::getBbmxaha();
    }

    /**
     * {@inheritDoc}
     */
    public function setBbavaha($bbavaha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBbavaha', array($bbavaha));

        return parent::setBbavaha($bbavaha);
    }

    /**
     * {@inheritDoc}
     */
    public function getBbavaha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBbavaha', array());

        return parent::getBbavaha();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiv($div)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiv', array($div));

        return parent::setDiv($div);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiv()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getDiv();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiv', array());

        return parent::getDiv();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getDate();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setHometeam($hometeam)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHometeam', array($hometeam));

        return parent::setHometeam($hometeam);
    }

    /**
     * {@inheritDoc}
     */
    public function getHometeam()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getHometeam();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHometeam', array());

        return parent::getHometeam();
    }

    /**
     * {@inheritDoc}
     */
    public function setAwayteam($awayteam)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAwayteam', array($awayteam));

        return parent::setAwayteam($awayteam);
    }

    /**
     * {@inheritDoc}
     */
    public function getAwayteam()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getAwayteam();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAwayteam', array());

        return parent::getAwayteam();
    }

}