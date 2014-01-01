<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace SlmQueueBeanstalkd\Options;

use Pheanstalk_Pheanstalk as Pheanstalk;
use Zend\Stdlib\AbstractOptions;

/**
 * Options for a Tube
 */
class BeanstalkdQueueOptions extends AbstractOptions
{
    /**
     * @var int
     */
    protected $priority = Pheanstalk::DEFAULT_PRIORITY;

    /**
     * @var int
     */
    protected $delay = Pheanstalk::DEFAULT_DELAY;

    /**
     * @var int
     */
    protected $ttr = Pheanstalk::DEFAULT_TTR;

    /**
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->priority = (int) $priority;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $delay
     */
    public function setDelay($delay)
    {
        $this->delay = (int) $delay;
    }

    /**
     * @return int
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * @param int $ttr
     */
    public function setTtr($ttr)
    {
        $this->ttr = (int) $ttr;
    }

    /**
     * @return int
     */
    public function getTtr()
    {
        return $this->ttr;
    }
}